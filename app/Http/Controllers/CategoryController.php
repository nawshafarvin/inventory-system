<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('products')->get();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('categories.index')
            ->with('success', 'Category created successfully!');
    }
    public function edit(Category $category)
{
    return view('categories.edit', compact('category'));
}
public function update(StoreCategoryRequest $request, Category $category)
{
    $category->update($request->validated());

    return redirect()->route('categories.index')
        ->with('success', 'Category updated successfully!');
}
}