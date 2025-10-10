<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('load');
});

Route::get('/welcome', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/login', [PageController::class, 'login']);
Route::get('/signup', [PageController::class, 'signup']);
Route::get('/home', [PageController::class, 'home'])->name('home');

Route::post('/login-post', [AuthController::class, 'login']);
Route::post('/signup-post', [AuthController::class, 'signup']);

Route::get('/beginner', [PageController::class, 'beginner'])->name('beginner');
Route::get('/elementary', [PageController::class, 'elementary'])->name('elementary');
Route::get('/intermediate', [PageController::class, 'intermediate'])->name('intermediate');
Route::get('/advance', [PageController::class, 'advance'])->name('advance');

Route::get('/beginner/stage1/{id}', [QuestionController::class, 'show'])->name('stage1.show');
Route::get('/beginner/stage2/{id}', [QuestionController::class, 'show'])->name('stage2.show');

Route::post('/submit-answer', [QuestionController::class, 'submitAnswer'])->name('submit.answer');

