<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\StockMovement;
use Illuminate\Support\Facades\DB;

class StockMovementController extends Controller
{
    public function store(Request $request, $productId)
{
    $validated = $request->validate([
        'type' => 'required|in:in,out',
        'quantity' => 'required|integer|min:1',
        'note' => 'nullable|string',
    ]);

    DB::transaction(function () use ($validated, $productId) {

        $product = Product::findOrFail($productId);

        if ($validated['type'] === 'out' &&
            $product->quantity < $validated['quantity']) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'quantity' => 'Insufficient stock quantity.',
            ]);
        }

        if ($validated['type'] === 'in') {
            $product->quantity += $validated['quantity'];
        } else {
            $product->quantity -= $validated['quantity'];
        }

        $product->save();

        StockMovement::create([
            'product_id' => $product->id,
            'type' => $validated['type'],
            'quantity' => $validated['quantity'],
            'note' => $validated['note'] ?? null,
        ]);
    });

    return redirect()->route('products.index')
        ->with('success', 'Stock movement recorded successfully!');
}
}
