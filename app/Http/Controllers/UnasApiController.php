<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UnasApiController extends Controller
{
    protected $client;
    protected $token;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function login()
    {
        $apiKey = 'f5fa9186987d3d6d9f52e8386089f1c6204efc29'; // Ваш API ключ
        $requestBody = '<?xml version="1.0" encoding="UTF-8" ?>
        <Params>
            <ApiKey>' . $apiKey . '</ApiKey>
            <WebshopInfo>true</WebshopInfo>
        </Params>';

        $response = $this->client->post('https://api.unas.eu/shop/login', [
            'body' => $requestBody,
            'headers' => [
                'Content-Type' => 'application/xml',
            ],
        ]);

        $xml = simplexml_load_string($response->getBody());
        $this->token = (string)$xml->Token;

        return response()->json(['token' => $this->token]);
    }

    public function getProductsdb()
    {
        // Инициализация cURL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Установите ваш API ключ
        $apiKey = 'f5fa9186987d3d6d9f52e8386089f1c6204efc29'; // Ваш API ключ

        // Запрос на логин
        $loginRequest = '<?xml version="1.0" encoding="UTF-8" ?>
        <Params>
            <ApiKey>' . $apiKey . '</ApiKey>
            <WebshopInfo>true</WebshopInfo>
        </Params>';

        curl_setopt($curl, CURLOPT_URL, "https://api.unas.eu/shop/login");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $loginRequest);
        $loginResponse = curl_exec($curl);

        if ($loginResponse === false) {
            return response()->json(['error' => 'Curl error: ' . curl_error($curl)], 500);
        }

        $loginXml = simplexml_load_string($loginResponse);
        $token = (string)$loginXml->Token;

        if (!$token) {
            return response()->json(['error' => 'Не удалось получить токен: ' . $loginResponse], 401);
        }

        // Запрос на получение данных о продуктах в формате CSV
        $headers = [
            "Authorization: Bearer " . $token,
            "Content-Type: application/xml"
        ];

        $request = '<?xml version="1.0" encoding="UTF-8" ?>
        <Params>
            <Format>csv</Format>
            <Compress>no</Compress>
            <Lang>hu</Lang>
        </Params>';

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, "https://api.unas.eu/shop/getProductDB"); // Используем getProductDB
        curl_setopt($curl, CURLOPT_POSTFIELDS, $request);

        $response = curl_exec($curl);

        if ($response === false) {
            return response()->json(['error' => 'Curl error: ' . curl_error($curl)], 500);
        }

        // Закрытие cURL сессии
        curl_close($curl);

        // Парсинг ответа
        $xml = simplexml_load_string($response);
        $url = (string)$xml->Url;

        // Загрузка CSV файла по полученному URL
        $csvData = file_get_contents($url);

        if ($csvData === false) {
            return response()->json(['error' => 'Не удалось загрузить CSV файл.'], 500);
        }

        // // Преобразование CSV в массив
        // $lines = explode(PHP_EOL, $csvData);
        // $csvArray = array_map('str_getcsv', $lines);

        // // Возвращаем данные в формате JSON
        // return response()->json($csvArray);

        // Преобразование CSV в массив
        $lines = explode(PHP_EOL, $csvData);
        $csvArray = array_map('str_getcsv', $lines);

        // Получаем заголовки
        $headers = array_shift($csvArray); // Извлекаем первую строку как заголовки

        // Форматируем данные в виде ассоциативного массива
        $formattedData = [];
        foreach ($csvArray as $row) {
            if (count($row) === count($headers)) {
                $formattedData[] = array_combine($headers, $row);
            }
        }

        // Возврат вида с данными
        return view('products.indexdb', compact('formattedData'));
    }





    public function getProducts()
    {
        // Инициализация cURL
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // API ключ
        $apiKey = 'f5fa9186987d3d6d9f52e8386089f1c6204efc29';

        // Запрос на логин
        $loginRequest = '<?xml version="1.0" encoding="UTF-8"?><Params><ApiKey>' . $apiKey . '</ApiKey><WebshopInfo>true</WebshopInfo></Params>';

        curl_setopt($curl, CURLOPT_URL, "https://api.unas.eu/shop/login");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $loginRequest);
        $loginResponse = curl_exec($curl);

        if ($loginResponse === false) {
            return response()->json(['error' => 'Curl error: ' . curl_error($curl)], 500);
        }

        $loginXml = simplexml_load_string($loginResponse);
        $token = (string)$loginXml->Token;

        if (!$token) {
            return response()->json(['error' => 'Не удалось получить токен: ' . $loginResponse], 401);
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
            <LimitNum>50</LimitNum>
            <LimitStart>0</LimitStart>
            <ContentType>full</ContentType>
        </Params>
        XML;



        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_URL, "https://api.unas.eu/shop/getProduct");
        curl_setopt($curl, CURLOPT_POSTFIELDS, $productRequest);

        $productResponse = curl_exec($curl);


        // dd($productResponse);
        // dd([
        //     'raw_response' => $productResponse,
        //     'response_type' => gettype($productResponse),
        //     'response_length' => strlen($productResponse),
        //     'headers' => $headers,
        //     'request' => $productRequest,
        // ]);

        if ($productResponse === false) {
            return response()->json(['error' => 'Curl error: ' . curl_error($curl)], 500);
        }

        curl_close($curl);

        // Пробуем распарсить XML
        $xml = simplexml_load_string($productResponse);
        if ($xml === false) {
            return response()->json([
                'error' => 'Ошибка парсинга XML',
                'raw_response' => $productResponse
            ], 500);
        }

        // Сохраняем продукты в базу данных
        foreach ($xml->Product as $productData) {
            // Инициализируем массив для хранения изображений
            $imagesArray = [];

            // Проверяем, есть ли изображения
            if (isset($productData->Images->Image)) {
                foreach ($productData->Images->Image as $image) {
                    // Извлекаем необходимые данные для каждого изображения
                    $imagesArray[] = [
                        'type' => (string)$image->Type,
                        'url' => (string)$image->Url->Medium,
                        'sefUrl' => (string)$image->SefUrl,
                        'filename' => (string)$image->Filename,
                        'alt' => (string)$image->Alt,
                    ];
                }
            }

            // Сохраняем данные
            \App\Models\Product::updateOrCreate(
                ['unas_id' => (string)$productData->Id],
                [
                    'sku' => (string)$productData->Sku,
                    'state' => (string)$productData->State,
                    'create_time' => Carbon::createFromTimestamp((int)$productData->CreateTime),
                    'last_mod_time' => Carbon::createFromTimestamp((int)$productData->LastModTime),
                    'name' => (string)$productData->Name,
                    'unit' => (string)$productData->Unit,
                    'minimum_qty' => (int)$productData->MinimumQty,
                    'description_short' => (string)$productData->Description->Short,
                    'description_long' => (string)$productData->Description->Long,

                    // JSON поля
                    'images' => json_encode([
                        'default_filename' => (string)$productData->Images->DefaultFilename,
                        'default_alt' => (string)$productData->Images->DefaultAlt,
                        'og' => (string)$productData->Images->OG,
                        'last_mod_time' => (int)$productData->Images->LastModTime,
                        'list' => $imagesArray, // Используем наш массив изображений
                    ]),

                    // JSON поля для цен
                    'prices' => json_encode([
                        'vat' => (float)str_replace('%', '', (string)$productData->Prices->Vat), // Удаляем '%' и конвертируем в float
                        'price' => [
                            'type' => 'normal', // Можно изменить тип, если у вас есть логика для определения типа
                            'net' => (float)$productData->Prices->Price->Net, // Чистая цена
                            'gross' => (float)$productData->Prices->Price->Gross, // Брутто цена
                            'actual' => 1, // Предположим, что цена актуальна
                        ],
                    ]),


                    'categories' => json_encode((array)$productData->Categories),
                    'statuses' => json_encode((array)$productData->Statuses),

                    // Булевы поля с проверкой
                    'no_list' => (int)$productData->NoList,
                    'inquire' => (int)$productData->Inquire,
                    'only_gift_status' => (int)$productData->OnlyGiftStatus,
                    'explicit' => (int)$productData->Explicit,
                ]
            );
        }



        $products = Product::all();

        // Возвращаем представление с продуктами
        return view('products.index', compact('products'));

        return response()->json(['success' => 'Продукты успешно сохранены'], 200);
    }
}
