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

Route::middleware('web')->group(function () {
    Route::get('/welcome', [PageController::class, 'welcome']);
    Route::get('/about', [PageController::class, 'about']);
    Route::get('/login', [PageController::class, 'login'])->name('login');
    Route::get('/signup', [PageController::class, 'signup']);
    Route::post('/login-post', [AuthController::class, 'login'])->name('login.post');
    Route::post('/signup-post', [AuthController::class, 'signup'])->name('signup.post');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
    
    Route::middleware('auth')->group(function () {
        Route::get('/home', [PageController::class, 'home'])->name('home');
        Route::get('/setting', [SettingController::class, 'index'])->name('setting');
        Route::post('/change-password', [SettingController::class,'updatePassword'])->name('password.update');
    });
});

Route::post('/logout', function(){
    Auth::logout(); 
    session()->invalidate();
    session()->regenerateToken(); 
    return redirect('/login')->with('success','Logout successful');
})->name('logout');

// Route untuk pulau
Route::get('/beginner', [PageController::class, 'beginner'])->name('beginner');
Route::get('/elementary', [PageController::class, 'elementary'])->name('elementary');
Route::get('/intermediate', [PageController::class, 'intermediate'])->name('intermediate');
Route::get('/advance', [PageController::class, 'advance'])->name('advance');

// Route untuk stage
Route::get('/beginner/stage1/{id}', [QuestionController::class, 'show'])->name('stage1.show');
Route::get('/beginner/stage2/{id}', [QuestionController::class, 'show'])->name('stage2.show');

// Route untuk submit jawaban
Route::post('/submit-answer', [QuestionController::class, 'submitAnswer'])->name('submit.answer');