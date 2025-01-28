<?php

namespace App\Console\Commands;

use App\Models\UnasProduct;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class ImportUnasProducts extends Command
{
    protected $signature = 'app:import-unas-products';
    protected $description = 'Импортирует товары из Unas';

    public function handle()
    {
        $this->info('Получаем данные из Unas...');

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // API ключ
        $apiKey = 'c9fee685261d00f137f44f4d203ed5ed67fca717';

        // Логин
        $loginRequest = '<?xml version="1.0" encoding="UTF-8"?><Params><ApiKey>' . $apiKey . '</ApiKey><WebshopInfo>true</WebshopInfo></Params>';
        curl_setopt($curl, CURLOPT_URL, "https://api.unas.eu/shop/login");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $loginRequest);
        $loginResponse = curl_exec($curl);

        if ($loginResponse === false) {
            $this->error('Curl error: ' . curl_error($curl));
            return;
        }

        $loginXml = simplexml_load_string($loginResponse);
        $token = (string)$loginXml->Token;

        if (!$token) {
            $this->error('Не удалось получить токен: ' . $loginResponse);
            return;
        }

        // Запрос продуктов
        $headers = [
            "Authorization: Bearer " . $token,
            "Content-Type: application/xml"
        ];

        $productRequest = <<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <Params>
            <StatusBase>1</StatusBase>
            <LimitNum>56</LimitNum>
            <LimitStart>0</LimitStart>
            <ContentType>full</ContentType>
        </Params>
        XML;

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, "https://api.unas.eu/shop/getProduct");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $productRequest);

        $productResponse = curl_exec($curl);

        if ($productResponse === false) {
            $this->error('Curl error: ' . curl_error($curl));
            return;
        }

        $productsXml = simplexml_load_string($productResponse);

        $this->info(print_r($productsXml, true));

        if (!$productsXml) {
            $this->error('Ошибка при парсинге XML: ' . $productResponse);
            return;
        }

        foreach ($productsXml->Product as $productXml) {
            $this->processProduct($productXml);
        }

        $this->info('Синхронизация завершена.');
    }



    protected function processProduct($productXml)
    {



        // Получаем данные о товаре
        $unasId = (string)$productXml->Id;
        $sku = (string)$productXml->Sku;
        $name = (string)$productXml->Name;
        $minimumQty = (int)$productXml->MinimumQty;

        $categories = [];
        if ($productXml->Categories && $productXml->Categories->Category) {
            foreach ($productXml->Categories->Category as $category) {
                $categories[] = [
                    'Type' => (string)$category->Type,
                    'Id' => (string)$category->Id,
                    'Name' => (string)$category->Name
                ];
            }
        }

        
        
        $params = [];
        if ($productXml->Params && $productXml->Params->Param) {
            foreach ($productXml->Params->Param as $param) {
                $paramData = [
                    'Id' => (string)$param->Id,
                    'Type' => (string)$param->Type,
                    'Name' => !empty($param->Name) ? (string)$param->Name : null, // Преобразуем в строку
                    'Value' => !empty($param->Value) ? (string)$param->Value : null, // Преобразуем в строку
                    'Group' => !empty($param->Group) ? (string)$param->Group : null, // Преобразуем в строку
                    'Text' => !empty($param->Text) ? (string)$param->Text : null, // Преобразуем в строку
                    'Before' => !empty($param->Before) ? (string)$param->Before : null, // Добавляем Before
                    'After' => !empty($param->After) ? (string)$param->After : null, // Добавляем After
                ];

                // Убираем пустые значения
                $paramData = array_filter($paramData, function ($value) {
                    return $value !== null;
                });

                $params[] = $paramData;
            }
        }

        // Обработка вариантов
        $variants = [];
        if ($productXml->Variants && $productXml->Variants->Variant) {
            foreach ($productXml->Variants->Variant as $variant) {
                $variantData = [
                    'Name' => !empty($variant->Name) ? (string)$variant->Name : null, // Название варианта
                    'Values' => [], // Массив для значений варианта
                ];

                // Обрабатываем значения варианта
                if ($variant->Values && $variant->Values->Value) {
                    foreach ($variant->Values->Value as $value) {
                        $valueData = [
                            'Name' => !empty($value->Name) ? (string)$value->Name : null, // Название значения
                            'ExtraPrice' => !empty($value->ExtraPrice) ? (float)$value->ExtraPrice : null, // Дополнительная цена
                        ];

                        // Убираем пустые значения
                        $valueData = array_filter($valueData, function ($val) {
                            return $val !== null;
                        });

                        $variantData['Values'][] = $valueData;
                    }
                }

                // Убираем пустые значения
                $variantData = array_filter($variantData, function ($val) {
                    return !empty($val);
                });

                $variants[] = $variantData;
            }
        }




        // Описание товара
        $description = [
            'Short' => (string)$productXml->Description->Short,
            'Long' => (string)$productXml->Description->Long,
        ];

        // Проверяем, существует ли товар в Laravel
        $product = UnasProduct::where('unas_id', $unasId)->first();

        $productArray = json_decode(json_encode($productXml), true);


        if (!$product) {
            // Новый товар
            $product = new UnasProduct([
                'unas_id' => $unasId,
                'sku' => $sku,
                'name' => $name,
                'description' => json_encode($description),
                'minimum_qty' => $minimumQty,
                'statuses' => json_encode($productArray['Statuses'] ?? null),
                'categories' => json_encode($categories),
                'no_list' => (bool)($productArray['NoList'] ?? false),
                'inquire' => (bool)($productArray['Inquire'] ?? false),
                'cust_discount_disable' => (bool)($productArray['CustDiscountDisable'] ?? false),
                'explicit' => (bool)($productArray['Explicit'] ?? false),
                'export' => json_encode($productArray['Export'] ?? null),
                'unit' => (string)$productXml->Unit,
                'maximum_qty' => (int)($productArray['MaximumQty'] ?? 0),
                'alert_qty' => (int)($productArray['AlertQty'] ?? 0),
                'unit_step' => (string)($productArray['UnitStep'] ?? ''),
                'alter_unit' => json_encode($productArray['AlterUnit'] ?? null),
                'weight' => (float)($productArray['Weight'] ?? 0),
                'point' => (int)($productArray['Point'] ?? 0),
                'buyable_with_point' => (string)($productArray['BuyableWithPoint'] ?? 'no') === 'yes',
                'prices' => json_encode($productArray['Prices'] ?? null),
                'url' => (string)$productXml->Url,
                'sef_url' => (string)$productXml->SefUrl,
                'images' => json_encode($productArray['Images'] ?? null),
                'variants' => json_encode($variants),
                'datas' => json_encode($productArray['Datas'] ?? null),
                'params' => json_encode($params),
                'additional_datas' => json_encode($productArray['AdditionalDatas'] ?? null),
                'qty_discount' => json_encode($productArray['QtyDiscount'] ?? null),
                'additional_products' => json_encode($productArray['AdditionalProducts'] ?? null),
                'similar_products' => json_encode($productArray['SimilarProducts'] ?? null),
                'stocks' => json_encode($productArray['Stocks'] ?? null),
                'online_content' => json_encode($productArray['OnlineContent'] ?? null),
                'plus_services' => json_encode($productArray['PlusServices'] ?? null),
                'types' => json_encode($productArray['Types'] ?? null),
                'package_product' => (string)($productArray['PackageProduct'] ?? 'no') === 'yes',
                'package_components' => json_encode($productArray['PackageComponents'] ?? null),
                'meta' => json_encode($productArray['Meta'] ?? null),
                'automatic_meta' => json_encode($productArray['AutomaticMeta'] ?? null),
            ]);

            $product->save();

            $this->syncWithShopify($product, true); // Синхронизируем новый товар
        } else {
            // Проверяем, изменились ли данные
            $hasChanges = $product->sku !== $sku ||
                $product->name !== $name ||
                $product->minimum_qty !== $minimumQty ||
                $product->description !== json_encode($description);

            if ($hasChanges) {
                $product->update([
                    'sku' => $sku,
                    'name' => $name,
                    'description' => json_encode($description),
                    'minimum_qty' => $minimumQty,
                    'statuses' => json_encode($productArray['Statuses'] ?? null),
                    'no_list' => (bool)($productArray['NoList'] ?? false),
                    'inquire' => (bool)($productArray['Inquire'] ?? false),
                    'cust_discount_disable' => (bool)($productArray['CustDiscountDisable'] ?? false),
                    'explicit' => (bool)($productArray['Explicit'] ?? false),
                    'export' => json_encode($productArray['Export'] ?? null),
                    'unit' => (string)$productXml->Unit,
                    'maximum_qty' => (int)($productArray['MaximumQty'] ?? 0),
                    'alert_qty' => (int)($productArray['AlertQty'] ?? 0),
                    'unit_step' => (string)($productArray['UnitStep'] ?? ''),
                    'alter_unit' => json_encode($productArray['AlterUnit'] ?? null),
                    'weight' => (float)($productArray['Weight'] ?? 0),
                    'point' => (int)($productArray['Point'] ?? 0),
                    'buyable_with_point' => (string)($productArray['BuyableWithPoint'] ?? 'no') === 'yes',
                    'prices' => json_encode($productArray['Prices'] ?? null),
                    'url' => (string)$productXml->Url,
                    'sef_url' => (string)$productXml->SefUrl,
                    'images' => json_encode($productArray['Images'] ?? null),
                    'variants' => json_encode($productArray['Variants'] ?? null),
                    'datas' => json_encode($productArray['Datas'] ?? null),
                    'params' => json_encode($productArray['Params'] ?? null),
                    'additional_datas' => json_encode($productArray['AdditionalDatas'] ?? null),
                    'qty_discount' => json_encode($productArray['QtyDiscount'] ?? null),
                    'additional_products' => json_encode($productArray['AdditionalProducts'] ?? null),
                    'similar_products' => json_encode($productArray['SimilarProducts'] ?? null),
                    'stocks' => json_encode($productArray['Stocks'] ?? null),
                    'online_content' => json_encode($productArray['OnlineContent'] ?? null),
                    'plus_services' => json_encode($productArray['PlusServices'] ?? null),
                    'types' => json_encode($productArray['Types'] ?? null),
                    'package_product' => (string)($productArray['PackageProduct'] ?? 'no') === 'yes',
                    'package_components' => json_encode($productArray['PackageComponents'] ?? null),
                    'meta' => json_encode($productArray['Meta'] ?? null),
                    'automatic_meta' => json_encode($productArray['AutomaticMeta'] ?? null),
                ]);


                $this->syncWithShopify($product, false); // Обновляем существующий товар
            }
        }
    }

    protected function syncWithShopify(UnasProduct $product, bool $isNew)
    {
        $client = new \GuzzleHttp\Client([
            'base_uri' => 'https://' . config('shopify.shop_domain'),
            'headers' => [
                'X-Shopify-Access-Token' => config('shopify.access_token'),
                'Content-Type' => 'application/json',
            ],
        ]);

        try {
            if ($isNew) {
                // Создание нового товара
                $response = $client->post('/admin/api/2024-01/products.json', [
                    'json' => $this->prepareShopifyProduct($product),
                ]);
                $this->info("Товар создан в Shopify: {$product->name}");
            } else {
                // Обновление существующего товара
                $response = $client->put("/admin/api/2024-01/products/{$product->sku}.json", [
                    'json' => $this->prepareShopifyProduct($product),
                ]);
                $this->info("Товар обновлен в Shopify: {$product->name}");
            }
        } catch (Exception $e) {
            $this->error("Ошибка синхронизации с Shopify: " . $e->getMessage());
            Log::error("Shopify sync error: " . $e->getMessage());
        }
    }



    protected function prepareShopifyProduct(UnasProduct $product, $response = null)
    {

        // function getLastCategory($categoryString)
        // {
        //     // Check if the string is JSON
        //     $categories = json_decode($categoryString, true);

        //     if ($categories && isset($categories[0]['Name'])) {
        //         // If it's JSON, split the Name field
        //         $categoriesArray = explode('|', $categories[0]['Name']);
        //     } else {
        //         // If it's a direct string
        //         $categoriesArray = explode('|', $categoryString);
        //     }

        //     // Return last element after trimming whitespace
        //     return trim(end($categoriesArray));
        // }

        // Выберем только первые 3 параметра для опций
        // $params = json_decode($product->params, true);
        // $options = [];
        // $count = 0;

        // foreach ($params as $param) {
        //     if ($count >= 3) break; // Останавливаемся после 3 опций

        //     $options[] = [
        //         'name' => $param['Name'],
        //         'values' => [$param['Value']]
        //     ];
        //     $count++;
        // }


        // Декодируем JSON из $product->params
        $params = json_decode($product->params, true);

        // Подготавливаем массив для метафилда
        $metaArray = [];
        
        foreach ($params as $param) {
            if (!empty($param['Id']) && !empty($param['Name']) && !empty($param['Value'])) {
                // Добавляем строки в формате 'ид: значение'
                $metaArray[] = trim($param['Name']) . ': ' . trim($param['Value']);
            }
        }
        
        // Преобразуем массив в JSON строку
        $metaString = json_encode($metaArray);



        $shopifyProduct = [
            'product' => [
                'title' => $product->name,
                'body_html' => json_decode($product->description, true)['Long'] ?? '',
                // 'tags' => getLastCategory($product->categories),

                'vendor' => 'mala.hu',
                // 'tags' => ['mala.hu'], // Используйте массив для тегов

                // 'tags' => array_column(json_decode($product->categories, true), 'Name'),

                // 'tags' => array_map(function($category) {
                // // Разбиваем строку по символу '|'
                // $parts = explode('|', $category['Name']);
                
                // // Разбиваем каждую часть на отдельные теги
                // $tags = [];
                // foreach ($parts as $part) {
                //     $tags = array_merge($tags, preg_split('/\s+/', trim($part)));
                // }
                
                // return array_unique(array_filter($tags));
                // }, json_decode($product->categories, true)),
                // Для коллекции используйте ID коллекции
                // 'collections' => [
                //     ['id' => 642701361498]
                // ],
                // 'vendor' => json_decode($product->categories, true)[0]['Name'] ?? '',

                // 'product_type' => getLastCategory($product->categories),

                'variants' => [
                    [
                        'sku' => $product->sku,
                        'price' => json_decode($product->prices, true)['Price']['Gross'] ?? 0,
                        'inventory_quantity' => $product->minimum_qty,
                    ],
                ],

                'metafields' => [
                    [
                        'namespace' => 'custom',
                        'key' => 'meta',
                        'value' => $metaString,
                        'type' => 'list.single_line_text_field'
                    ],
                ],

            ],
        ];

        // $this->info('Отправляемые данные: ' . json_encode($shopifyProduct));

        $images = json_decode($product->images, true);

        // Проверяем, есть ли изображения
        if (!empty($images['Image'])) {
            // Если Image — это массив
            if (isset($images['Image'][0])) {
                // Обрабатываем как массив
                $shopifyProduct['product']['images'] = array_map(function ($image) {
                    if (isset($image['Url']['Medium'])) {
                        return ['src' => $image['Url']['Medium']];
                    }
                    return null;
                }, $images['Image']);
            } else {
                // Если Image — это одиночный объект
                if (isset($images['Image']['Url']['Medium'])) {
                    $shopifyProduct['product']['images'] = [
                        ['src' => $images['Image']['Url']['Medium']]
                    ];
                }
            }

            // Убираем null значения из массива (если какие-то изображения не имеют URL)
            if (isset($shopifyProduct['product']['images'])) {
                $shopifyProduct['product']['images'] = array_filter($shopifyProduct['product']['images']);
            }
        }


        $baseUrl = 'https://' . config('shopify.shop_domain');
        $client = new \GuzzleHttp\Client([
            'base_uri' => $baseUrl,
            'headers' => [
                'X-Shopify-Access-Token' => config('shopify.access_token'),
                'Content-Type' => 'application/json',
            ],
        ]);
        
        $response = $client->post('/admin/api/2024-01/products.json', [
            'json' => $shopifyProduct
        ]);
        
        $responseData = json_decode($response->getBody(), true);
        
        if (isset($responseData['product']['id'])) {
            // Добавление в коллекцию сразу после создания товара
            try {
                $client->post('/admin/api/2024-01/collects.json', [
                    'json' => [
                        'collect' => [
                            'collection_id' => 642701361498, // ID вашей коллекции
                            'product_id' => $responseData['product']['id']
                        ]
                    ]
                ]);
                $this->info("Товар добавлен в коллекцию: {$product->name}");
            } catch (\Exception $e) {
                $this->error("Ошибка добавления в коллекцию: " . $e->getMessage());
            }
        }

        return $shopifyProduct;
    }
}
