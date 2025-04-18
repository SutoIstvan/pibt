<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ShopifyService;

class ProductController extends Controller
{
    // public function upload()
    // {
    //     $shopifyService = new ShopifyService();

    //     $productData = [
    //         'title' => 'Название товара',
    //         'description' => 'Описание товара',
    //         'price' => '99.99',
    //         'sku' => 'SKU123',
    //         'quantity' => 10,
    //         'product_type' => 'Категория товара'
    //     ];

    //     $result = $shopifyService->createProduct($productData);

    //     return response()->json($result);
    // }

    // public function upload(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'price' => 'required',
    //         'sku' => 'required',
    //         'quantity' => 'required|integer',
    //         'product_type' => 'required',
    //         'image_url' => 'required|url',
    //         'image_alt' => 'nullable|string'
    //     ]);
    
    //     try {
    //         $shopifyService = new ShopifyService();
    //         $result = $shopifyService->createProduct($validatedData);
    
    //         // Если есть изображение, добавляем его к продукту
    //         if (isset($validatedData['image'])) {
    //             $shopifyService->addImageToProduct($result->id, $validatedData['image']);
    //         }
    
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Product successfully uploaded to Shopify',
    //             'data' => $result
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => $e->getMessage()
    //         ], 500);
    //     }
    // }
    


    public function upload(Request $request)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'price' => 'required',
        'sku' => 'required',
        'quantity' => 'required|integer',
        'product_type' => 'required',
        'images' => 'required|array',
        'images.*.url' => 'required|url',
        'images.*.alt' => 'required|string'
    ]);

    try {
        $shopifyService = new ShopifyService();
        $result = $shopifyService->createProduct($validatedData);
        
        return response()->json([
            'success' => true,
            'message' => 'Product successfully uploaded to Shopify with ' . count($validatedData['images']) . ' images',
            'data' => $result
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'success' => false,
            'message' => $e->getMessage()
        ], 500);
    }
}
}
