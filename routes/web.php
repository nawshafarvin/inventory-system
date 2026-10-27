<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SuppliersController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/inventory-info', 'inventory-info');

Route::get('/suppliers', [SuppliersController::class, 'index'])
    ->name('suppliers.index');

Route::get('/suppliers/{id}', [SuppliersController::class, 'show'])
    ->name('suppliers.show');