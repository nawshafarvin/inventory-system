<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();

        foreach ($categories as $category) {
            echo $category->name . ' - Products: ' . $category->products->count() . '<br>';
        }
    }
}