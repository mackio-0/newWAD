<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    function products()
    {
        // $products = file_get_contents("https://fakestoreapi.com/products/");
        // return $products;
        $res = Http::get('https://fakestoreapi.com/products/');
        dd($res->collect()->where("price", "<", 50)->where("rating.rate", ">", 3)->all());
        // collection is a laravel helper wrapper around arrays that will have its own methods to manipulate the data inside
    }

    function productsMaxPrice($max)
    {
        $res = Http::get('https://fakestoreapi.com/products/');
        dd($res->collect()->where('price', "<", $max)->all());
    }

    function productsMinPrice($min)
    {
        $res = Http::get('https://fakestoreapi.com/products/');
        dd($res->collect()->where('price', ">", $min)->all());
    }

    function productsRange($min, $max)
    {
        $res = Http::get('https://fakestoreapi.com/products/');
        // $result = $res->collect()->where('price', ">", $min)->where('price', "<", $max)->all();
        $result = $res->collect()->whereBetween('price', [$min, $max])->all();
        dd($result);
    }
}
