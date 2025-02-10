<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController; // Tambahkan ini

// Route untuk tampilan
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route untuk CRUD produk
    Route::resource('admin/products', ProductController::class)->names([
        'index' => 'admin.products.index',
        'create' => 'admin.products.create',
        'store' => 'admin.products.store',
        'show' => 'admin.products.show',
        'edit' => 'admin.products.edit',
        'update' => 'admin.products.update',
        'destroy' => 'admin.products.destroy',
    ]);
});
// routes/web.php
Route::middleware('auth')->group(function () {
    Route::get('/homepage', function () {
        $products = \App\Models\Product::latest()->paginate(9); // Ambil data produk dengan pagination
        return view('homepage', compact('products'));
    })->name('homepage');

    // Route untuk detail produk
    Route::get('/products/{id}', [App\Http\Controllers\ProductController::class, 'showDetail'])->name('products.show');
});
