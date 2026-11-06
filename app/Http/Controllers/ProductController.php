<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['supplier', 'category', 'tags'])->get();

        return view('products.index', ['products' => $products]);
    }

    public function show($id)
    {
        $product = Product::with(['supplier', 'category', 'tags'])->findOrFail($id);

        return view('products.show', ['product' => $product]);
    }
    public function create()
{$categories = Category::all();
$suppliers = Supplier::all();
    return view('products.create', compact('categories', 'suppliers'));
}
public function store(StoreProductRequest $request)
{
$validated = $request->validated();
if ($request->hasFile('image')) {
    $validated['image'] = $request->file('image')->store('products', 'public');
}
Product::create($validated);

return redirect()->route('products.index')
    ->with('success', 'Product created successfully!');
}
}