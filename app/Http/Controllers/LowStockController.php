<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LowStockController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->where('quantity', '<', 40)
            ->get();

        return view('low-stock', ['products' => $products]);
    }
}