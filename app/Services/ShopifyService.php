<?php

namespace App\Services;

use GuzzleHttp\Client;

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

    public function addImageToProduct($productId, $imageUrl)
    {
        $response = $this->client->post("products/{$productId}/images.json", [
            'json' => [
                'image' => [
                    'src' => $imageUrl
                ]
            ]
        ]);

        return json_decode($response->getBody()->getContents());
    }

    public function createProduct($productData)
    {
        $endpoint = '/admin/api/2025-01/products.json';
        
        // Подготавливаем массив изображений для Shopify
        $images = array_map(function($image) {
            return [
                'src' => $image['url'], // Используем sefUrl из данных
                'alt' => $image['alt']
            ];
        }, $productData['images']);
        
        $productPayload = [
            'product' => [
                'title' => $productData['title'],
                'body_html' => $productData['description'],
                'vendor' => $productData['vendor'] ?? 'Your Store',
                'product_type' => $productData['product_type'] ?? '',
                'variants' => [
                    [
                        'price' => $productData['price'],
                        'sku' => $productData['sku'] ?? '',
                        'inventory_quantity' => $productData['quantity'] ?? 0,
                        'inventory_management' => 'shopify'
                    ]
                ],
                'status' => 'active',
                'images' => $images // Массив всех изображений
            ]
        ];
        
        $response = $this->client->post($endpoint, [
            'json' => $productPayload
        ]);
    
        return json_decode($response->getBody(), true);
    }
}