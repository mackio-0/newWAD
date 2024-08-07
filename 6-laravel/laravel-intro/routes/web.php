<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('blog.about-us');
// });

// Route::get('/contact', function () {
//     return view('blog.contact');
// });

// Route::get('/mac', function () {
//     return 'This is Macbook';
// });

// Route::get('/mac/{type}', function ($type) {
//     return 'This is Macbook ' . $type;
// });

// Route::get('/mac/{type}/{size}', function ($type, $size) {
//     return 'This is Macbook ' . $type . ' ' . $size . ' inches.';
// });

// Route::get('/profile/{age?}', function ($age = null) {
//     return 'This is user profile ' . $age;
// });

// Route::get('/area/{w}/{h}', fn ($w, $h) => ($w * $h) . ' sqft');

// Route::get('/products', function () {
//     // $products = file_get_contents('https://fakestoreapi.com/products');
//     // return $products;

//     $products = Http::get('https://fakestoreapi.com/products');
//     dd($products);
// });

// Route::get('/home', function () {
//     return view('blog.home');
// });

Route::get('/home', [ItemController::class, 'home']);
Route::get('/about', [ItemController::class, 'about']);
Route::get('/contact', [ItemController::class, 'contact']);
Route::get('/area/{w}/{h}', [ItemController::class, 'calculate']);
Route::get('/profile/{age?}', [ItemController::class, 'profile']);

Route::get('/test', [TestController::class, 'test']);

// Route::get('/product', [ProductController::class, 'index']);
// Route::get('/product/create', [ProductController::class, 'create']);
// Route::post('/product', [ProductController::class, 'store']);
// Route::get('/product/show/{id}', [ProductController::class, 'show']);
// Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
// Route::get('/product/update', [ProductController::class, 'update']);
// Route::get('/product/delete', [ProductController::class, 'destroy']);

Route::resource('product', ProductController::class);
