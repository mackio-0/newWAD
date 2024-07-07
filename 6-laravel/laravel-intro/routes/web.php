<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('blog.home');
});

Route::get('/about', function () {
    return view('blog.about-us');
});

Route::get('/contact', function () {
    return view('blog.contact');
});

// Route::get('/mac', function () {
//     return 'This is Macbook';
// });

// Route::get('/mac/{type}', function ($type) {
//     return 'This is Macbook ' . $type;
// });

Route::get('/mac/{type}/{size}', function ($type, $size) {
    return 'This is Macbook ' . $type . ' ' . $size . ' inches.';
});

Route::get('/profile/{age?}', function ($age = null) {
    return 'This is user profile ' . $age;
});

Route::get('/area/{w}/{h}', fn ($w, $h) => ($w * $h) . ' sqft');

Route::get('/products', function () {
    // $products = file_get_contents('https://fakestoreapi.com/products');
    // return $products;

    $products = Http::get('https://fakestoreapi.com/products');
    dd($products);
});
