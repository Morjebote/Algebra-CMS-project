<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', AuthController::class . '@showLogin')
    ->name('login.show')
    ->middleware('guest');

Route::post('/login', AuthController::class . '@login')
    ->name('login');

Route::get('/register', AuthController::class . '@showRegister')
    ->name('register.show')
    ->middleware('guest');

Route::post('/register', AuthController::class . '@register')
    ->name('register');
