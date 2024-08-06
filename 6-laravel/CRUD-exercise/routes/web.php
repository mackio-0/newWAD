<?php

use App\Http\Controllers\EmployerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('student', StudentController::class);

Route::resource('employer', EmployerController::class);
