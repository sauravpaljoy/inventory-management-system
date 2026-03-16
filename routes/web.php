<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
// Landing page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Auth routes (guests only)
Route::middleware('guest')->group(function () {
    Route::get('/login',    [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login',   [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register',[AuthController::class, 'register']);

    Route::get('/forgot-password', [AuthController::class, 'showForgot'])->name('password.request');
});

// Protected routes (authenticated only)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[UserController::class, 'dashboard'])->name('dashboard');

    Route::post('/logout',  [AuthController::class, 'logout'])->name('logout');
});
