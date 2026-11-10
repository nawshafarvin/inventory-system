<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();

        return view('suppliers.index', compact('suppliers'));
    }

    public function show($id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('suppliers.show', compact('supplier'));
    }
    public function edit($id)
{
    $supplier = Supplier::findOrFail($id);

    return view('suppliers.edit', compact('supplier'));

}
public function update(Request $request, $id)
{
    $supplier = Supplier::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'nullable|email',
        'phone' => 'nullable|string',
        'address' => 'nullable|string',
    ]);

    $supplier->update($validated);

    return redirect()->route('suppliers.index')
        ->with('success', 'Supplier updated successfully!');
}
public function destroy($id)
{
    $supplier = Supplier::findOrFail($id);

    if ($supplier->products()->exists()) {
        return redirect()->route('suppliers.index')
            ->with('error', 'Cannot delete supplier because products are linked.');
    }

    $supplier->delete();

    return redirect()->route('suppliers.index')
        ->with('success', 'Supplier deleted successfully!');
}
}