<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\LowStockController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inventory-info', 'inventory-info');

Route::get('/suppliers', [SuppliersController::class, 'index'])
    ->name('suppliers.index');

Route::get('/suppliers/{id}', [SuppliersController::class, 'show'])
    ->name('suppliers.show');
    Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');
    Route::get('/low-stock', [LowStockController::class, 'index'])
    ->name('low-stock.index');