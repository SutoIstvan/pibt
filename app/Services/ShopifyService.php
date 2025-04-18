<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class ShopifyService
{
    private $client;
    private $baseUrl;

    public function __construct()
    {
        $this->baseUrl = 'https://' . config('shopify.shop_domain');
        
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'headers' => [
                'X-Shopify-Access-Token' => config('shopify.access_token'),
                'Content-Type' => 'application/json'
            ]
        ]);
    }

    public function findProductBySku($sku)
    {
        try {
            $response = $this->client->get('/admin/api/2025-01/products.json', [
                'query' => [
                    'sku' => $sku
                ]
            ]);
            
            $result = json_decode($response->getBody(), true);
            
            // Ищем продукт с точным совпадением SKU
            foreach ($result['products'] ?? [] as $product) {
                foreach ($product['variants'] as $variant) {
                    if ($variant['sku'] === $sku) {
                        return $product;
                    }
                }
            }
            
            return null;
        } catch (\Exception $e) {
            Log::error('Error finding product by SKU: ' . $e->getMessage());
            return null;
        }
    }

    public function updateProduct($productId, $productData)
    {
        $endpoint = "/admin/api/2025-01/products/{$productId}.json";
        
        $images = array_map(function($image) {
            return [
                'src' => $image['url'],
                'alt' => $image['alt'] ?? 'Изображение товара'
            ];
        }, $productData['images'] ?? []);
        
        $productPayload = [
            'product' => [
                'id' => $productId,
                'title' => $productData['title'],
                'body_html' => $productData['description'] ?? '',
                'variants' => [
                    [
                        'price' => $productData['price'],
                        'sku' => $productData['sku'],
                        'inventory_quantity' => $productData['quantity'],
                        'inventory_management' => 'shopify',
                    ]
                ],
                'images' => $images,
            ]
        ];

        try {
            $response = $this->client->put($endpoint, [
                'json' => $productPayload
            ]);
            
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            Log::error('Shopify API Error: ' . $e->getMessage());
            Log::error('Update Payload: ' . json_encode($productPayload));
            throw $e;
        }
    }

    public function syncProduct($productData)
    {
        try {
            // Проверяем количество товара
            $quantity = $productData['Quantity'] ?? 0;
            if ($quantity < 1) {
                Log::info('Товар пропущен: количество меньше 1');
                return;
            }

            $shopifyProductData = [
                'title' => $productData['Name'] ?? 'Без названия',
                'description' => $productData['Description'] ?? '',
                'price' => $productData['Price'] ?? 0,
                'sku' => $productData['Sku'] ?? '',
                'quantity' => $quantity,
                'images' => $productData['Images'] ?? [],
            ];

            // Проверяем, существует ли товар
            $existingProduct = $this->findProductBySku($shopifyProductData['sku']);

            if ($existingProduct) {
                Log::info('Updating existing product with SKU: ' . $shopifyProductData['sku']);
                $productId = $existingProduct['id'];
                $this->updateProduct($productId, $shopifyProductData);
            } else {
                Log::info('Creating new product with SKU: ' . $shopifyProductData['sku']);
                $newProduct = $this->createProduct($shopifyProductData);
                $productId = $newProduct['product']['id'];
            }

            // Обрабатываем категории
            if (isset($productData['collections'])) {
                $collections = $productData['collections'];

                // Обрабатываем основную коллекцию
                if (isset($collections['main_collection'])) {
                    $collectionName = $collections['main_collection'];
                    $this->processCollection($productId, $collectionName);
                }

                // Обрабатываем дополнительные коллекции
                if (isset($collections['additional_collections'])) {
                    foreach ($collections['additional_collections'] as $categoryLevels) {
                        $collectionName = end($categoryLevels);
                        $this->processCollection($productId, $collectionName);
                    }
                }
            }

            return true;
        } catch (\Exception $e) {
            Log::error('Ошибка синхронизации товара: ' . $e->getMessage());
            throw $e;
        }
    }

    protected function processCollection($productId, $collectionName)
    {
        // Ищем коллекцию
        $collectionId = $this->findCollectionByName($collectionName);

        // Если коллекция не найдена, создаём её
        if (!$collectionId) {
            $collectionId = $this->createCollection($collectionName);
            if (!$collectionId) {
                Log::error("Не удалось создать коллекцию: $collectionName");
                return;
            }
        }

        // Добавляем товар в коллекцию
        $result = $this->addProductToCollection($productId, $collectionId);
        if ($result) {
            Log::info("Товар успешно добавлен в коллекцию: $collectionName (ID: $collectionId)");
        } else {
            Log::error("Не удалось добавить товар в коллекцию: $collectionName (ID: $collectionId)");
        }
    }

    public function createProduct($productData)
    {
        $endpoint = '/admin/api/2025-01/products.json';
        
        $images = array_map(function($image) {
            return [
                'src' => $image['url'],
                'alt' => $image['alt'] ?? 'Изображение товара'
            ];
        }, $productData['images'] ?? []);
        
        $productPayload = [
            'product' => [
                'title' => $productData['title'],
                'body_html' => $productData['description'] ?? '',
                'vendor' => $productData['vendor'] ?? 'Your Store',
                'product_type' => $productData['product_type'] ?? '',
                'variants' => [
                    [
                        'price' => $productData['price'],
                        'sku' => $productData['sku'],
                        'inventory_quantity' => $productData['quantity'],
                        'inventory_management' => 'shopify',
                    ]
                ],
                'status' => 'active',
                'images' => $images,
            ]
        ];

        try {
            $response = $this->client->post($endpoint, [
                'json' => $productPayload
            ]);
            
            return json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            Log::error('Shopify API Error: ' . $e->getMessage());
            Log::error('Create Payload: ' . json_encode($productPayload));
            throw $e;
        }
    }

    public function findCollectionByName($collectionName)
    {
        try {
            $page = 1;
            $limit = 250; // Максимальное количество коллекций на странице
            $collectionId = null;
    
            do {
                $response = $this->client->get('/admin/api/2025-01/custom_collections.json', [
                    'query' => [
                        'title' => $collectionName,
                        'limit' => $limit,
                        'page' => $page,
                    ]
                ]);
    
                $result = json_decode($response->getBody(), true);
    
                // Проверяем, есть ли коллекция с таким названием
                foreach ($result['custom_collections'] ?? [] as $collection) {
                    if ($collection['title'] === $collectionName) {
                        $collectionId = $collection['id'];
                        break;
                    }
                }
    
                $page++;
            } while (isset($result['custom_collections']) && count($result['custom_collections']) === $limit && !$collectionId);
    
            return $collectionId; // Возвращаем ID коллекции или null, если не найдена
        } catch (\Exception $e) {
            Log::error('Error finding collection by name: ' . $e->getMessage());
            return null;
        }
    }

    public function createCollection($collectionName)
    {
        // Проверяем, существует ли коллекция с таким названием
        $existingCollectionId = $this->findCollectionByName($collectionName);
    
        if ($existingCollectionId) {
            Log::info("Коллекция '$collectionName' уже существует (ID: $existingCollectionId)");
            return $existingCollectionId;
        }
    
        $endpoint = '/admin/api/2025-01/custom_collections.json';
    
        $collectionPayload = [
            'custom_collection' => [
                'title' => $collectionName,
                'rules' => [
                    [
                        'column' => 'title',
                        'relation' => 'equals',
                        'condition' => $collectionName,
                    ],
                ],
            ]
        ];
    
        try {
            $response = $this->client->post($endpoint, [
                'json' => $collectionPayload
            ]);
    
            $result = json_decode($response->getBody(), true);
    
            if (isset($result['custom_collection']['id'])) {
                return $result['custom_collection']['id']; // Возвращаем ID созданной коллекции
            } else {
                Log::error('Failed to create collection: ' . json_encode($result));
                return null;
            }
        } catch (\Exception $e) {
            Log::error('Error creating collection: ' . $e->getMessage());
            Log::error('Create Collection Payload: ' . json_encode($collectionPayload));
            return null;
        }
    }

    public function addProductToCollection($productId, $collectionId)
    {
        $endpoint = '/admin/api/2025-01/collects.json';

        $collectPayload = [
            'collect' => [
                'product_id' => $productId,
                'collection_id' => $collectionId,
            ]
        ];

        try {
            $response = $this->client->post($endpoint, [
                'json' => $collectPayload
            ]);

            $result = json_decode($response->getBody(), true);

            if (isset($result['collect']['id'])) {
                return $result['collect']['id']; // Возвращаем ID связи (collect)
            } else {
                Log::error('Failed to add product to collection: ' . json_encode($result));
                return null;
            }
        } catch (\Exception $e) {
            Log::error('Error adding product to collection: ' . $e->getMessage());
            Log::error('Add Product to Collection Payload: ' . json_encode($collectPayload));
            return null;
        }
    }






    public function getCollectsByProductAndCollection($productId, $collectionId)
{
    try {
        $response = $this->client->get('/admin/api/2025-01/collects.json', [
            'query' => [
                'product_id' => $productId,
                'collection_id' => $collectionId,
            ]
        ]);

        return json_decode($response->getBody(), true);
    } catch (\Exception $e) {
        Log::error('Error getting collects by product and collection: ' . $e->getMessage());
        return [];
    }
}
}







// class ShopifyService
// {
//     private $client;
//     private $baseUrl;

//     public function __construct()
//     {
//         $this->baseUrl = 'https://' . config('shopify.shop_domain');
        
//         $this->client = new Client([
//             'base_uri' => $this->baseUrl,
//             'headers' => [
//                 'X-Shopify-Access-Token' => config('shopify.access_token'),
//                 'Content-Type' => 'application/json'
//             ]
//         ]);
//     }

//     /**
//      * Добавляет изображение к товару в Shopify.
//      *
//      * @param int $productId ID товара в Shopify.
//      * @param string $imageUrl URL изображения.
//      * @return mixed
//      */
//     public function addImageToProduct($productId, $imageUrl)
//     {
//         $response = $this->client->post("products/{$productId}/images.json", [
//             'json' => [
//                 'image' => [
//                     'src' => $imageUrl
//                 ]
//             ]
//         ]);

//         return json_decode($response->getBody()->getContents());
//     }

//     /**
//      * Создает товар в Shopify.
//      *
//      * @param array $productData Данные товара.
//      * @return mixed
//      */
//     public function createProduct($productData)
//     {
//         $endpoint = '/admin/api/2025-01/products.json';
        
//         // Явно конвертируем формат изображений для Shopify
//         $images = array_map(function($image) {
//             return [
//                 'src' => $image['url'],
//                 'alt' => $image['alt'] ?? 'Изображение товара'
//             ];
//         }, $productData['images'] ?? []);
        
//         Log::info('Converted images for Shopify:', $images);
        
//         $productPayload = [
//             'product' => [
//                 'title' => $productData['title'],
//                 'body_html' => $productData['description'] ?? '',
//                 'vendor' => $productData['vendor'] ?? 'Your Store',
//                 'product_type' => $productData['product_type'] ?? '',
//                 'variants' => [
//                     [
//                         'price' => $productData['price'],
//                         'sku' => $productData['sku'],
//                         'inventory_quantity' => $productData['quantity'],
//                         'inventory_management' => 'shopify',
//                     ],
//                 ],
//                 'status' => 'active',
//                 'images' => $images,
//             ]
//         ];
    
//         Log::info('Sending payload to Shopify:', $productPayload);
    
//         try {
//             $response = $this->client->post($endpoint, [
//                 'json' => $productPayload
//             ]);
            
//             $result = json_decode($response->getBody(), true);
//             Log::info('Shopify response:', $result);
            
//             return $result;
//         } catch (\Exception $e) {
//             Log::error('Shopify API Error: ' . $e->getMessage());
//             Log::error('Payload: ' . json_encode($productPayload));
//             throw $e;
//         }
//     }
//     /**
//      * Синхронизирует товар из Unas в Shopify.
//      *
//      * @param array $productData Данные товара из Unas.
//      * @return mixed
//      */
//     public function syncProduct($productData)
//     {
//         try {
//             // Проверяем количество товара
//             $quantity = $productData['Quantity'] ?? 0;
//             if ($quantity < 1) {
//                 Log::info('Товар пропущен: количество меньше 1');
//                 return;
//             }
            
//             // Добавим логирование входящих данных
//             Log::info('Incoming product data:', $productData);
            
//             // Подготавливаем данные для Shopify
//             $shopifyProductData = [
//                 'title' => $productData['Name'] ?? 'Без названия',
//                 'description' => $productData['Description'] ?? '',
//                 'price' => $productData['Price'] ?? 0,
//                 'sku' => $productData['Sku'] ?? '',
//                 'quantity' => $quantity,
//                 'images' => $productData['Images'] ?? [], // Убедимся, что Images передаются корректно
//             ];
            
//             // Добавим логирование подготовленных данных
//             Log::info('Prepared product data:', $shopifyProductData);
            
//             return $this->createProduct($shopifyProductData);
//         } catch (\Exception $e) {
//             Log::error('Ошибка синхронизации товара: ' . $e->getMessage());
//             throw $e;
//         }
//     }

//     /**
//      * Подготавливает изображения для Shopify.
//      *
//      * @param array $imagesData Данные изображений из Unas.
//      * @return array
//      */
//     protected function prepareImages($imagesData)
//     {
//         $images = [];
        
//         foreach ($imagesData as $image) {
//             if (isset($image['url'])) {
//                 $images[] = [
//                     'src' => $image['url'],  // изменено с 'url' на 'src'
//                     'position' => 1,
//                     'alt' => $image['alt'] ?? 'Изображение товара'
//                 ];
//             }
//         }
        
//         return $images;
//     }
// }