<?php

namespace App\Console\Commands;

use App\Models\UnasProduct;
use Carbon\Carbon;
use Exception;
use Illuminate\Console\Command;


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

        // Базовые проверки
        if ((string)$productXml->State === 'live' && (int)$productXml->MinimumQty >= 1) {
            UnasProduct::updateOrCreate(
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


            // Shopify test


            // Для отладки выводим информацию о категориях
            $this->info('Товар ' . (string)$productXml->Name . ' добавлен / обновлен.');
            $this->info('Категории: ' . json_encode($categories, JSON_UNESCAPED_UNICODE));
        } else {
            $this->info('Товар ' . (string)$productXml->Name . ' не активен или количество меньше 1, пропускаем.');
        }
    }
}