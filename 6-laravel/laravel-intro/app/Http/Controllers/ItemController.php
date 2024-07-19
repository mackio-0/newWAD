<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function home()
    {
        // return 'this is home controller';
        return view('blog.home');
    }

    public function about()
    {
        return view('blog.about-us');
    }

    public function contact()
    {
        return view('blog.contact');
    }

    public function calculate($w, $h)
    {
        // return $request;
        return 'Area is ' . $w * $h . ' sqft';
    }

    public function profile($age = null)
    {
        return 'This profile is ' . ($age  ? $age . ' years old' : 'undefined');
    }
}
