<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    private function suppliers()
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'ABC Suppliers',
                'email' => 'abc@example.com',
                'phone' => '0771234567',
            ],

            2 => [
                'id' => 2,
                'name' => 'City Traders',
                'email' => 'city@example.com',
                'phone' => '0777654321',
            ],

            3 => [
                'id' => 3,
                'name' => 'Global Supplies',
                'email' => 'global@example.com',
                'phone' => '0712345678',
            ],
        ];
    }

    public function index()
    {
        $suppliers = $this->suppliers();

        return view('suppliers.index', compact('suppliers'));
    }

    public function show($id)
    {
        $suppliers = $this->suppliers();

        if (!isset($suppliers[$id])) {
            abort(404);
        }

        $supplier = $suppliers[$id];

        return view('suppliers.show', compact('supplier'));
    }
}