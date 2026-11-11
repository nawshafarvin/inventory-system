@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<h1>Inventory Dashboard</h1>

<div>
    <h3>Total Products</h3>
    <p>{{ $totalProducts }}</p>
</div>

<div>
    <h3>Total Suppliers</h3>
    <p>{{ $totalSuppliers }}</p>
</div>

<div>
    <h3>Total Categories</h3>
    <p>{{ $totalCategories }}</p>
</div>

<div>
    <h3>Low Stock Products</h3>
    <p>{{ $lowStockProducts }}</p>
</div>

@endsection