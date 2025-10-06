<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('load');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', [PageController::class, 'about']);

Route::get('/login', [PageController::class, 'login']);