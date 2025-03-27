<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


// Homepage
Route::get('/', fn() => view('homepage'))->name('home');

// Authenticated routes
Route::group(['middleware' => ['authenticated', 'role:employee']], function () {
    Route::get('/auth-test', function () {
        return "Reached";
    });
});

// Guest Routes (Need no authentication)
Route::group(['middleware' => ['guest']], function () {
    // Auth Routes
    Route::group(['as' => 'auth.', 'prefix' => 'auth'], function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

        Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
        Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

        Route::post('/logout', [AuthController::class, 'logout'])->name('logout.submit');
    });
});

