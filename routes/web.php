<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/references', function () {
    return view('references');
})->name('references');

Route::prefix('services')->group(function () {
    Route::get('/access-control-systems', function () {
        return view('services.access_control_systems');
    })->name('services.access_control_systems');

    Route::get('/surveillance-systems', function () {
        return view('services.surveillance_systems');
    })->name('services.surveillance_systems');

});

Route::get('change-language/{locale}', function ($locale) {
    if (in_array($locale, ['hu', 'ru'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('changeLanguage');
