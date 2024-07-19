<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // compact method
    // public function test()
    // {
    //     $name = 'Kyaw Kyaw';
    //     $age = 1;
    //     $carrer = 'developer';
    //     return view('test', compact('name', 'age', 'carrer'));
    // }

    public function test()
    {
        $names = ['Mg Mg', 'Du Du', 'Zw Zw', 'Hla Hla', 'Mya Mya'];
        $age = 32;
        return view('test', compact('age'));
    }

    // with method
    // public function test()
    // {
    //     $name = 'Kyaw Kyaw';
    //     $age = 22;
    //     $carrer = 'developer';
    //     return view('test')
    //         ->with('name', $name)
    //         ->with('age', $age)
    //         ->with('carrer', $carrer);
    // }

    // array
    // public function test()
    // {
    //     $data = [
    //         'name' => 'Kyaw Kyaw',
    //         'age' => 22,
    //         'carrer' => 'developer'
    //     ];
    //     return view('test', ['data' => $data]);
    // }

    // sending html tag
    // public function test()
    // {
    //     $htmlString = '<h1>Hello world</h1>';
    //     return view('test', compact('htmlString'));
    // }
}
