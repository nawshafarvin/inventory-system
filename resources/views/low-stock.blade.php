@extends('layouts.app')

@section('title', 'Low Stock Products')

@section('content')
    <h2>Low Stock Products</h2>

    @forelse ($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <p>Price: {{ $product->price }}</p>
            <p>Quantity: {{ $product->quantity }}</p>
        </div>
        <hr>
    @empty
        <p>No low-stock products found.</p>
    @endforelse
@endsection