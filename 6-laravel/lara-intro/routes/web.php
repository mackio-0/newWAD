<?php

use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Home";
});

// about
Route::get('about-us', function () {
    return "I am about us.";
});

Route::get('mac/{type}/{size}', function ($type, $size) {
    return "Here is my macbook/$type $size inches.";
});

Route::get('profile/{id?}', function ($id = null) {
    return "Here is user $id profile";
});

Route::get('area/{w}/{b}', fn ($w, $b) => $w * $b . " sqft");

Route::get('products', [ProductController::class, 'products']);

Route::get('products/price-max/{max}', [ProductController::class, 'productsMaxPrice']);

Route::get('products/price-min/{min}', [ProductController::class, 'productsMinPrice']);

Route::get('products/price-between/{min}/{max}', [ProductController::class, 'productsRange']);

Route::get(
    'exchange/{amount}/{fromCurrency}/to/mmk',
    [ExchangeController::class, "toMmk"]
);
