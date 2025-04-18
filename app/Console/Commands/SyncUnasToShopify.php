<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\Models\UnasProduct;
use App\Services\ShopifyService;
use Carbon\Carbon;

class SyncUnasToShopify extends Command
{
    protected $signature = 'sync:unas-to-shopify';
    protected $description = 'Синхронизирует товары из Unas в Shopify';

    public function handle()
    {
        $this->info('Получаем данные из Unas...');

        // Инициализация cURL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // API ключ
        $apiKey = 'c9fee685261d00f137f44f4d203ed5ed67fca717';

        // Запрос на логин
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

        // Запрос на получение продуктов
        $headers = [
            "Authorization: Bearer " . $token,
            "Content-Type: application/xml"
        ];



        $productRequest = <<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <Params>
            <StatusBase>1</StatusBase>
            <CategoryId>901601</CategoryId>
            <ContentType>full</ContentType>
            <LimitNum>1000</LimitNum>
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

        // Парсим XML с товарами
        $productsXml = simplexml_load_string($productResponse);

        if (!$productsXml) {
            $this->error('Ошибка при парсинге XML: ' . $productResponse);
            return;
        }

        // Обрабатываем каждый товар
        foreach ($productsXml->Product as $productXml) {
            $this->processProduct($productXml);
        }

        $this->info('Синхронизация завершена.');
    }

    /**
     * Обрабатывает один товар.
     *
     * @param \SimpleXMLElement $productXml Данные товара из Unas.
     */
    protected function processProduct($productXml)
    {
        // Отладочный вывод данных товара
        $this->info('Данные товара: ' . json_encode($productXml));

        $unasId = (string)$productXml->Id;
        $this->info("Обрабатываем товар: $unasId");

        // Проверяем состояние товара
        if ((string)$productXml->State !== 'live') {
            $this->info("Товар $unasId не добавлен: состояние не 'live'.");
            return;
        }

        // Проверяем минимальное количество товара
        $minimumQty = (int)($productXml->MinimumQty ?? 0);
        if ($minimumQty < 1) {
            $this->info("Товар $unasId не добавлен: минимальное количество меньше 1.");
            return;
        }

        // Проверяем количество товара
        $quantity = (int)($productXml->Stocks->Stock->Qty ?? 0);
        if ($quantity < 1) {
            $this->info("Товар $unasId не добавлен: количество меньше 1.");
            return;
        }

        // Проверяем, есть ли товар в базе
        $product = UnasProduct::where('unas_id', $unasId)->first();

        // Если товар новый или изменился
        if (!$product || $this->hasProductChanged($product, $productXml)) {
            $this->info("Товар $unasId изменен или новый. Синхронизируем с Shopify...");

            // Подготавливаем данные для Shopify
            $shopifyProductData = [
                'Id' => $unasId,
                'Name' => (string)$productXml->Name ?: 'Untitled',
                'Price' => (float)($productXml->Prices->Price->Gross ?? 0),
                'Sku' => (string)$productXml->Sku ?: '',
                'Description' => (string)$productXml->Description->Long ?: '',
                'Images' => $this->prepareImages($productXml->Images),
                'Quantity' => $quantity,
                'Status' => (string)$productXml->State,
                'MinimumQty' => (int)$productXml->MinimumQty,
                'Unit' => (string)$productXml->Unit,
                'Variants' => $this->prepareVariants($productXml->Variants, $productXml->Params),
                'collections' => $this->prepareCategories($productXml->Categories),
            ];

            $this->info('Debug - Images prepared for Shopify: ' . json_encode($shopifyProductData['Images']));

            // Отправляем данные на Shopify
            $shopifyService = new ShopifyService();
            $productResponse = $shopifyService->syncProduct($shopifyProductData);

            // Если товар успешно создан или обновлён, работаем с коллекциями
            if ($productResponse && isset($productResponse['product']['id'])) {
                $productId = $productResponse['product']['id'];

                // Обрабатываем категории (коллекции)
                if (isset($shopifyProductData['collections'])) {
                    $this->processCollections($shopifyService, $productId, $shopifyProductData['collections']);
                }
            }

            // Сохраняем/обновляем товар в базе данных
            UnasProduct::updateOrCreate(
                ['unas_id' => $unasId],
                [
                    'state' => (string)$productXml->State,
                    'sku' => (string)$productXml->Sku,
                    'create_time' => Carbon::createFromTimestamp((int)$productXml->CreateTime),
                    'last_mod_time' => Carbon::createFromTimestamp((int)$productXml->LastModTime),
                    'statuses' => json_encode($productXml->Statuses),
                    'no_list' => (bool)$productXml->NoList,
                    'inquire' => (bool)$productXml->Inquire,
                    'cust_discount_disable' => (bool)$productXml->CustDiscountDisable,
                    'only_gift_status' => (bool)$productXml->OnlyGiftStatus,
                    'explicit' => (bool)$productXml->Explicit,
                    'export' => json_encode($productXml->Export),
                    'name' => (string)$productXml->Name,
                    'unit' => (string)$productXml->Unit,
                    'minimum_qty' => (int)$productXml->MinimumQty,
                    'buyable_with_point' => (bool)$productXml->BuyableWithPoint,
                    'description' => json_encode($productXml->Description),
                    'prices' => json_encode($productXml->Prices),
                    'categories' => json_encode($productXml->Categories),
                    'subscription' => json_encode($productXml->Subscription),
                    'url' => (string)$productXml->Url,
                    'sef_url' => (string)$productXml->SefUrl,
                    'images' => json_encode($productXml->Images),
                    'variants' => json_encode($productXml->Variants),
                    'params' => json_encode($productXml->Params),
                    'cross_sale' => json_encode($productXml->CrossSale),
                    'up_sale' => json_encode($productXml->UpSale),
                    'stocks' => json_encode($productXml->Stocks),
                    'custom_order_value' => (int)$productXml->CustomOrderValue,
                    'types' => json_encode($productXml->Types),
                    'package_product' => (bool)$productXml->PackageProduct,
                    'automatic_meta' => json_encode($productXml->AutomaticMeta),
                ]
            );

            $this->info("Товар $unasId успешно синхронизирован.");
        } else {
            $this->info("Товар $unasId не изменился. Пропускаем.");
        }
    }

    /**
     * Проверяет, изменился ли товар.
     *
     * @param UnasProduct $product Товар из базы данных.
     * @param \SimpleXMLElement $productXml Данные товара из Unas.
     * @return bool
     */
    protected function hasProductChanged($product, $productXml)
    {
        return $product->name !== (string)$productXml->Name ||
            $product->sku !== (string)$productXml->Sku ||
            $product->state !== (string)$productXml->State;
    }

    /**
     * Подготавливает изображения для Shopify.
     *
     * @param \SimpleXMLElement $imagesData Данные изображений из Unas.
     * @return array
     */
    protected function prepareImages($imagesData)
    {
        $images = [];
    
        if (isset($imagesData->Image)) {
            // Если несколько изображений
            foreach ($imagesData->Image as $image) {
                // Проверяем, что у изображения есть URL
                if (isset($image->Url->Medium)) {
                    $images[] = [
                        'url' => (string)$image->Url->Medium,
                        'alt' => (string)$image->Alt ?: 'Изображение товара'
                    ];
                }
            }
        }
    
        return $images;
    }
    /**
     * Подготавливает категории для Shopify.
     *
     * @param \SimpleXMLElement $categories Данные категорий из Unas.
     * @return array
     */
    public function prepareCategories($categories)
    {
        $result = [];

        $this->info('Обработка категорий: ' . json_encode($categories));

        foreach ($categories->Category as $category) {
            $type = (string)$category->Type;
            $categoryPath = (string)$category->Name;

            $this->info("Обработка категории типа $type: $categoryPath");

            // Разделяем иерархию категорий
            $categoryLevels = explode('|', $categoryPath);

            if ($type === 'base') {
                $result['main_collection'] = end($categoryLevels);
                $result['category_hierarchy'] = $categoryLevels;
            } else if ($type === 'alt') {
                $result['additional_collections'][] = $categoryLevels;
            }
        }

        $this->info('Подготовленные категории: ' . json_encode($result));
        return $result;
    }

    /**
     * Подготавливает варианты товара для Shopify.
     *
     * @param \SimpleXMLElement $variants Данные вариантов из Unas.
     * @param \SimpleXMLElement $params Данные параметров из Unas.
     * @return array
     */
    protected function prepareVariants($variants, $params)
    {
        $preparedVariants = [];

        // Если есть параметры, добавляем их как опции вариантов
        if ($params && isset($params->Param)) {
            foreach ($params->Param as $param) {
                $options = [];
                if (isset($param->Value)) {
                    foreach ($param->Value as $value) {
                        $options[] = (string)$value;
                    }
                }

                $preparedVariants['options'][] = [
                    'name' => (string)$param->Name,
                    'values' => $options
                ];
            }
        }

        // Если есть готовые варианты, добавляем их
        if ($variants && isset($variants->Variant)) {
            foreach ($variants->Variant as $variant) {
                $preparedVariants['variants'][] = [
                    'sku' => (string)($variant->Sku ?? ''),
                    'price' => (float)($variant->Price->Gross ?? 0),
                    'quantity' => (int)($variant->Stock->Qty ?? 0),
                ];
            }
        }

        return $preparedVariants;
    }

    /**
     * Обрабатывает коллекции для товара.
     *
     * @param ShopifyService $shopifyService Сервис для работы с Shopify.
     * @param int $productId ID товара в Shopify.
     * @param array $collections Данные коллекций.
     */
    protected function isProductInCollection($shopifyService, $productId, $collectionId)
    {
        try {
            $response = $shopifyService->getCollectsByProductAndCollection($productId, $collectionId);
            $collects = $response['collects'] ?? [];
    
            // Если найдена связь между товаром и коллекцией, возвращаем true
            return !empty($collects);
        } catch (\Exception $e) {
            $this->error("Ошибка при проверке товара в коллекции: " . $e->getMessage());
            return false;
        }
    }

   

protected function processCollections($shopifyService, $productId, $collections)
{
    // Обрабатываем основную коллекцию
    if (isset($collections['main_collection'])) {
        $this->processCollection($shopifyService, $productId, $collections['main_collection']);
    }

    // Обрабатываем дополнительные коллекции
    if (isset($collections['additional_collections'])) {
        foreach ($collections['additional_collections'] as $categoryLevels) {
            $collectionName = end($categoryLevels);
            $this->processCollection($shopifyService, $productId, $collectionName);
        }
    }
}

protected function processCollection($shopifyService, $productId, $collectionName)
{
    $this->info("Обработка коллекции: $collectionName");

    // Ищем коллекцию
    $collectionId = $shopifyService->findCollectionByName($collectionName);

    // Если коллекция не найдена, создаём её
    if (!$collectionId) {
        $this->info("Коллекция '$collectionName' не найдена. Создаём новую...");
        $collectionId = $shopifyService->createCollection($collectionName);

        if (!$collectionId) {
            $this->error("Не удалось создать коллекцию: $collectionName");
            return;
        }

        $this->info("Создана новая коллекция: $collectionName (ID: $collectionId)");
    }

    // Проверяем, не добавлен ли уже товар в коллекцию
    if ($this->isProductInCollection($shopifyService, $productId, $collectionId)) {
        $this->info("Товар уже находится в коллекции: $collectionName (ID: $collectionId)");
        return;
    }

    // Добавляем товар в коллекцию
    $this->info("Добавляем товар в коллекцию: $collectionName (ID: $collectionId)");
    $result = $shopifyService->addProductToCollection($productId, $collectionId);

    if ($result) {
        $this->info("Товар успешно добавлен в коллекцию: $collectionName (ID: $collectionId)");
    } else {
        $this->error("Не удалось добавить товар в коллекцию: $collectionName (ID: $collectionId)");
    }
}
}