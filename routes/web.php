<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

    // Admin Only Routes
    Route::middleware('admin')->group(function () {
        // Products
        Route::get('/products',           [AdminController::class, 'product_index'])->name('products');
        Route::get('/products/create',    [AdminController::class, 'product_create'])->name('products.create');
        Route::post('/products',          [AdminController::class, 'product_store'])->name('products.store');
        Route::get('/products/{product}/edit', [AdminController::class, 'product_edit'])->name('products.edit');
        Route::put('/products/{product}',      [AdminController::class, 'product_update'])->name('products.update');
        Route::delete('/products/{product}',   [AdminController::class, 'product_destroy'])->name('products.destroy');
        
        // Categories
        Route::get('/categories',         [AdminController::class, 'category_index'])->name('categories');
        Route::get('/categories/create',  [AdminController::class, 'category_create'])->name('categories.create');
        Route::post('/categories',        [AdminController::class, 'category_store'])->name('categories.store');
        Route::get('/categories/{category}/edit', [AdminController::class, 'category_edit'])->name('categories.edit');
        Route::put('/categories/{category}',      [AdminController::class, 'category_update'])->name('categories.update');
        Route::delete('/categories/{category}',   [AdminController::class, 'category_destroy'])->name('categories.destroy');

        // Users (Management)
        Route::get('/users',      [UserController::class, 'index'])->name('users');
    });

    Route::post('/logout',  [AuthController::class, 'logout'])->name('logout');
});
