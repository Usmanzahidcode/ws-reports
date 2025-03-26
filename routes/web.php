<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


// Homepage
Route::get('/', fn() => view('homepage'))->name('home');

// Auth Routes
Route::group(['as' => 'auth.', 'prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout.submit');
});
