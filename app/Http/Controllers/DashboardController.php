<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
{
    $totalProducts = Product::count();

    $totalSuppliers = Supplier::count();

    $totalCategories = Category::count();

    $lowStockProducts = Product::where('quantity', '<', 40)->count();

    return view('dashboard', compact(
        'totalProducts',
        'totalSuppliers',
        'totalCategories',
        'lowStockProducts'
    ));
}
}
