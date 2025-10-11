<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SettingController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('load');
});

Route::get('/welcome', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/signup', [PageController::class, 'signup']);
Route::get('/home', [PageController::class, 'home'])->name('home');
Route::get('/setting', [PageController::class, 'setting'])->name('setting');

Route::post('/login-post', [AuthController::class, 'login'])->name('login.post');
Route::post('/signup-post', [AuthController::class, 'signup'])->name('signup.post');
Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::post('/settings/update-password', [SettingController::class, 'updatePassword'])->name('setting.updatePassword');


// Route untuk pulau
Route::get('/beginner', [PageController::class, 'beginner'])->name('beginner');
Route::get('/elementary', [PageController::class, 'elementary'])->name('elementary');
Route::get('/intermediate', [PageController::class, 'intermediate'])->name('intermediate');
Route::get('/advance', [PageController::class, 'advance'])->name('advance');

// Route untuk stage
Route::get('/beginner/stage1/{id}', [QuestionController::class, 'show'])->name('stage1.show');
Route::get('/beginner/stage2/{id}', [QuestionController::class, 'show'])->name('stage2.show');
Route::get('/beginner/stage3/{id}', [QuestionController::class, 'show'])->name('stage3.show');
Route::get('/beginner/stage4/{id}', [QuestionController::class, 'show'])->name('stage4.show');
Route::get('/beginner/stage5/{id}', [QuestionController::class, 'show'])->name('stage5.show');

// Route untuk submit jawaban
Route::post('/submit-answer', [QuestionController::class, 'submitAnswer'])->name('submit.answer');