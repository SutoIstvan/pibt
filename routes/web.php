<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Http\Controllers\UnasApiController;

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UnasProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dimop', function () {
    return view('dimop');
})->name('dimop');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/references', function () {
    return view('references');
})->name('references');

Route::get('/gdpr', function () {
    return view('gdpr');
})->name('gdpr');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/phone', [ContactController::class, 'phonesubmit'])->name('contact.phonesubmit');

Route::prefix('services')->group(function () {
    Route::get('/access-control-systems', function () {
        return view('services.access_control_systems');
    })->name('services.access_control_systems');

    Route::get('/surveillance-systems', function () {
        return view('services.surveillance_systems');
    })->name('services.surveillance_systems');

    Route::get('/server-maintenance', function () {
        return view('services.server_maintenance');
    })->name('services.server_maintenance');

    Route::get('/network-infrastructure', function () {
        return view('services.network_infrastructure');
    })->name('services.network_infrastructure');

    Route::get('/computer-services', function () {
        return view('services.computer_services');
    })->name('services.computer_services');

    Route::get('/web-development', function () {
        return view('services.web_development');
    })->name('services.web_development');    
});

Route::get('change-language/{locale}', function ($locale) {
    if (in_array($locale, ['hu', 'ru'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('changeLanguage');



Route::get('/unas/login', [UnasApiController::class, 'login']);
Route::get('/unas/productsdb', [UnasApiController::class, 'getProductsdb']);
Route::get('/unas/products', [UnasApiController::class, 'getProducts']);

Route::post('/products/upload', [ProductController::class, 'upload'])->name('shopify.upload');




Route::post('/webhook/order-created', function (Request $request) {
    try {
        // Проверяем подпись вебхука
        $hmac = $request->header('X-Shopify-Hmac-Sha256');
        $data = $request->getContent();
        $secret = '69f9ff29ff9e24288e4341c9a61bb9e0fc443dd7bfc00247d55dd8f4aa81a82b';
        $calculatedHmac = base64_encode(hash_hmac('sha256', $data, $secret, true));

        // Логируем для отладки
        Log::info('Webhook проверка:', [
            'received_hmac' => $hmac,
            'calculated_hmac' => $calculatedHmac,
            'raw_data' => $data
        ]);

        if (!hash_equals($hmac, $calculatedHmac)) {
            Log::error('Неверная подпись вебхука');
            return response()->json(['error' => 'Invalid signature'], 401);
        }

        // Получаем данные из запроса
        $orderData = json_decode($data, true);

        // Записываем данные в лог
        Log::info('Получен новый заказ от Shopify:', [
            'order_id' => $orderData['id'] ?? 'unknown',
            'order_number' => $orderData['order_number'] ?? 'unknown',
            'data' => $orderData
        ]);

        return response()->json(['status' => 'success']);
    } catch (\Exception $e) {
        Log::error('Ошибка при обработке заказа: ' . $e->getMessage());
        return response()->json(['status' => 'error'], 500);
    }
});


Route::post('/products/import', [UnasProductController::class, 'storeFromXml']);




