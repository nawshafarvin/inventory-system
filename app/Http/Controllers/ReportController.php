<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return view('reports.index');
    }
    public function stockValue()
{
    $stockValue = \DB::table('products')
        ->selectRaw('SUM(price * quantity) as total')
        ->value('total');

    return view('reports.stock-value', compact('stockValue'));
}
public function stockMovements()
{
    $movements = \DB::table('stock_movements')
        ->join('products', 'stock_movements.product_id', '=', 'products.id')
        ->select(
            'products.name',
            'stock_movements.type',
            'stock_movements.quantity',
            'stock_movements.note',
            'stock_movements.created_at'
        )
        ->orderBy('stock_movements.created_at', 'desc')
        ->get();

    return view('reports.stock-movements', compact('movements'));
}
public function categoryStock()
{
    $categoryStocks = \DB::table('categories')
        ->leftJoin('products', 'categories.id', '=', 'products.category_id')
        ->select(
            'categories.name',
            \DB::raw('COUNT(products.id) as total_products'),
            \DB::raw('COALESCE(SUM(products.quantity), 0) as total_quantity')
        )
        ->groupBy('categories.id', 'categories.name')
        ->orderBy('categories.name')
        ->get();

    return view('reports.category-stock', compact('categoryStocks'));
}
}