<?php

namespace App\Console\Commands;

use App\Models\UnasProduct;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

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
            <LimitNum>5</LimitNum>
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


        // Получаем описание напрямую из XML
        $description = [
            'Short' => (string)$productXml->Description->Short,
            'Long' => (string)$productXml->Description->Long
        ];

        // Обрабатываем категории
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

        // Конвертируем XML в массив для удобства работы
        $productArray = json_decode(json_encode($productXml), true);

        if ((string)$productXml->State === 'live' && (int)$productXml->MinimumQty >= 1) {
            // Создаем или обновляем продукт
            $product = UnasProduct::updateOrCreate(
                ['unas_id' => (string)$productXml->Id],
                [
                    'state' => (string)$productXml->State,
                    'sku' => (string)$productXml->Sku,
                    'create_time' => !empty($productArray['History']['Event'][0]['Time']) ?
                        Carbon::createFromTimestamp((int)$productArray['History']['Event'][0]['Time']) : null,
                    'last_mod_time' => !empty($productArray['History']['Event']) ?
                        Carbon::createFromTimestamp((int)end($productArray['History']['Event'])['Time']) : null,
                    'statuses' => json_encode($productArray['Statuses'] ?? null),
                    'no_list' => (bool)($productArray['NoList'] ?? false),
                    'inquire' => (bool)($productArray['Inquire'] ?? false),
                    'cust_discount_disable' => (bool)($productArray['CustDiscountDisable'] ?? false),
                    'explicit' => (bool)($productArray['Explicit'] ?? false),
                    'export' => json_encode($productArray['Export'] ?? null),
                    'name' => (string)$productXml->Name,
                    'unit' => (string)$productXml->Unit,
                    'minimum_qty' => (int)$productXml->MinimumQty,
                    'maximum_qty' => (int)($productArray['MaximumQty'] ?? 0),
                    'alert_qty' => (int)($productArray['AlertQty'] ?? 0),
                    'unit_step' => (string)($productArray['UnitStep'] ?? ''),
                    'alter_unit' => json_encode($productArray['AlterUnit'] ?? null),
                    'weight' => (float)($productArray['Weight'] ?? 0),
                    'point' => (int)($productArray['Point'] ?? 0),
                    'buyable_with_point' => (string)($productArray['BuyableWithPoint'] ?? 'no') === 'yes',
                    'description' => json_encode($description),
                    'prices' => json_encode($productArray['Prices'] ?? null),
                    'categories' => json_encode($categories),  // Используем обработанные категории
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
                ]
            );

            // Проверяем, нужно ли синхронизировать с Shopify
            $needsSync = false;

            if ($product->wasRecentlyCreated) {
                // Новый товар
                $needsSync = true;
                $this->info("Новый товар: {$product->name}");
            } elseif ($product->wasChanged()) {
                // Товар был обновлён
                $needsSync = true;
                $this->info("Обновлён товар: {$product->name}");
            }

            if ($needsSync) {
                try {
                    // Инициализируем клиент Shopify с Guzzle
                    $baseUrl = 'https://' . config('shopify.shop_domain');
                    $client = new \GuzzleHttp\Client([
                        'base_uri' => $baseUrl,
                        'headers' => [
                            'X-Shopify-Access-Token' => config('shopify.access_token'),
                            'Content-Type' => 'application/json'
                        ]
                    ]);

                    // Проверяем существование товара в Shopify по SKU
                    $existingProduct = null;
                    if ($product->sku) {
                        // Логирование запроса
                        $query = ['sku' => $product->sku];
                        $this->info("Запрос к Shopify: GET /admin/api/2024-01/products.json, query: " . json_encode($query));
                    
                        try {
                            $response = $client->get('/admin/api/2024-01/products.json', [
                                'query' => $query
                            ]);
                    
                            // Логирование ответа
                            $responseData = json_decode($response->getBody(), true);
                            $this->info("Ответ от Shopify: " . json_encode($responseData));
                    
                            if (!empty($responseData['products'])) {
                                $existingProduct = $responseData['products'][0];
                                $this->info("Найден существующий товар в Shopify: " . json_encode($existingProduct));
                            } else {
                                $this->info("Товар с SKU '{$product->sku}' не найден в Shopify.");
                            }
                        } catch (\Exception $e) {
                            $this->error("Ошибка при запросе к Shopify: " . $e->getMessage());
                            Log::error("Ошибка при запросе к Shopify: " . $e->getMessage());
                        }
                    } else {
                        $this->info("SKU товара отсутствует, пропускаем проверку существования.");
                    }

                    // Подготавливаем данные для Shopify
                    $shopifyProduct = [
                        'product' => [
                            'Id' => $product->id,
                            'Sku' => $product->sku,
                            'title' => $product->name,
                            'name' => $product->name,
                            'body_html' => json_decode($product->description, true)['Long'] ?? '',
                            'vendor' => 'Your Store Name',
                            'product_type' => json_decode($product->categories, true)[0]['Name'] ?? '',
                            'variants' => [
                                [
                                    'sku' => $product->sku,
                                    'price' => json_decode($product->prices, true)['Price']['Gross'] ?? 0,
                                    'inventory_management' => 'shopify',
                                    'inventory_quantity' => $product->minimum_qty,
                                ]
                            ],
                            'status' => 'active'
                        ]
                    ];

                    // Добавляем изображения, если есть
                    // Декодируем JSON-строку в массив
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

                    if ($existingProduct) {
                        // Обновляем существующий товар
                        $response = $client->put("/admin/api/2024-01/products/{$existingProduct['id']}.json", [
                            'json' => $shopifyProduct
                        ]);
                        $this->info("Товар обновлен в Shopify: {$product->name} - {$product->sku}");
                    } else {
                        // Создаем новый товар
                        $response = $client->post('/admin/api/2024-01/products.json', [
                            'json' => $shopifyProduct
                        ]);
                        $responseData = json_decode($response->getBody(), true);
                        $this->info("Товар добавлен в Shopify: {$product->name} - {$product->sku}");

                        // Сохраняем ID товара из Shopify
                        if (isset($responseData['product']['id'])) {
                            $product->sku_new = $responseData['product']['id'];
                            $product->save();
                        }
                    }
                } catch (\Exception $e) {
                    $this->error("Ошибка синхронизации с Shopify для товара {$product->name}: " . $e->getMessage());
                    Log::error("Shopify sync error for product {$product->id}: " . $e->getMessage());
                }
            }
        }
    }
}
