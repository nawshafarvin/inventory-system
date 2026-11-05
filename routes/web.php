<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\LowStockController;
use App\Http\Controllers\Auth\LoginController;




Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);
Route::middleware('auth')->group(function () {
    Route::get('/change-password', [PasswordController::class, 'show'])
    ->name('password.change');
    Route::post('/change-password', [PasswordController::class, 'update'])
    ->name('password.update');
    
Route::view('/inventory-info', 'inventory-info');

Route::get('/suppliers', [SuppliersController::class, 'index'])
    ->name('suppliers.index');

Route::get('/suppliers/{id}', [SuppliersController::class, 'show'])
    ->name('suppliers.show');
    Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');
Route::middleware('can:admin')->group(function () {
    Route::get('/products/create', [ProductController::class, 'create'])
        ->name('products.create');

    Route::post('/products', [ProductController::class, 'store'])
        ->name('products.store');
});    
Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');
    Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');
    Route::get('/low-stock', [LowStockController::class, 'index'])
    ->name('low-stock.index'); 
    });
    Route::get('/session-test', function () {
    session(['student' => 'Nawsha']);

    return session('student');
    });
    Route::get('/admin-dashboard', function () {
    return 'Welcome Admin!';
})->middleware(['auth', 'admin']);
