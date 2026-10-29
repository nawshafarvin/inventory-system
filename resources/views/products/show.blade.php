@extends('layouts.app')

@section('title', 'Product Details')

@section('content')
    <div class="product">
        <h1>Product Details</h1>

        <h3>{{ $product->name }}</h3>

        <p>Product ID: {{ $product->id }}</p>
        <p>Description: {{ $product->description }}</p>
        <p>Price: {{ $product->price }}</p>
        <p>Available Quantity: {{ $product->quantity }}</p>

        <p>Category: {{ $product->category->name }}</p>

        <a class="btn" href="{{ route('products.index') }}">
            Back to Products
        </a>
    </div>
@endsection