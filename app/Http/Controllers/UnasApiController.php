<?php

namespace App\Http\Controllers;

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

// Преобразуем XML в массив
$products = json_decode(json_encode($xml), true);




// Извлечение данных для каждого продукта
foreach ($products['Product'] as $key => &$product) {
    // Извлекаем имя продукта
    $product['Name'] = (string)$xml->Product[$key]->Name;

    // Извлекаем цены: Gross и Net
    $product['PriceGross'] = isset($xml->Product[$key]->Prices->Price->Gross)
        ? (string)$xml->Product[$key]->Prices->Price->Gross
        : 'N/A';

    $product['PriceNet'] = isset($xml->Product[$key]->Prices->Price->Net)
        ? (string)$xml->Product[$key]->Prices->Price->Net
        : 'N/A';

    // Извлекаем краткое описание
    $product['ShortDescription'] = isset($xml->Product[$key]->Description->Short)
        ? trim((string)$xml->Product[$key]->Description->Short)
        : 'Описание отсутствует';

    // Извлекаем полное описание
    $product['LongDescription'] = isset($xml->Product[$key]->Description->Long)
        ? trim((string)$xml->Product[$key]->Description->Long)
        : 'Описание отсутствует';

}

// Возвращаем view с данными
return view('products.index', ['products' => $products]);

    }
}
