<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('load');
});

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/welcome', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/signup', [PageController::class, 'signup']);
Route::get('/home', [PageController::class, 'home'])->name('home');

Route::post('/login-post', [AuthController::class, 'login']);

