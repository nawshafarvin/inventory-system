<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\LowStockController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StockMovementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');
    Route::get('/reports', [ReportController::class, 'index'])
    ->name('reports.index');
    Route::get('/reports/stock-value', [ReportController::class, 'stockValue'])
    ->name('reports.stock-value');
    Route::get('/reports/stock-movements', [ReportController::class, 'stockMovements'])
    ->name('reports.stock-movements');
    Route::get('/reports/category-stock', [ReportController::class, 'categoryStock'])
    ->name('reports.category-stock');

    Route::post('/logout', [LoginController::class, 'logout']);

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

    Route::get('/products/{id}', [ProductController::class, 'show'])
        ->name('products.show');

    Route::get('/categories', [CategoryController::class, 'index'])
        ->name('categories.index');

    Route::get('/low-stock', [LowStockController::class, 'index'])
        ->name('low-stock.index');

    Route::middleware('can:admin')->group(function () {

        Route::get('/products/create', [ProductController::class, 'create'])
            ->name('products.create');

        Route::post('/products', [ProductController::class, 'store'])
            ->name('products.store');

        Route::get('/products/{id}/edit', [ProductController::class, 'edit'])
            ->name('products.edit');
            Route::get('/suppliers/{id}/edit', [SuppliersController::class, 'edit'])
    ->name('suppliers.edit');
    Route::put('/suppliers/{id}', [SuppliersController::class, 'update'])
    ->name('suppliers.update');
    Route::delete('/suppliers/{id}', [SuppliersController::class, 'destroy'])
    ->name('suppliers.destroy');

        Route::put('/products/{id}', [ProductController::class, 'update'])
            ->name('products.update');

        Route::post('/products/{productId}/stock-movements', [StockMovementController::class, 'store'])
            ->name('stock-movements.store');

        Route::get('/categories/create', [CategoryController::class, 'create'])
            ->name('categories.create');

        Route::post('/categories', [CategoryController::class, 'store'])
            ->name('categories.store');

        Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])
            ->name('categories.edit');

        Route::get('/users', [UserController::class, 'index'])
            ->name('users.index');
            Route::put('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');

Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });

    Route::get('/session-test', function () {
        session(['student' => 'Nawsha']);
        return session('student');
    });

    Route::get('/admin-dashboard', function () {
        return 'Welcome Admin!';
    })->middleware('admin');

});