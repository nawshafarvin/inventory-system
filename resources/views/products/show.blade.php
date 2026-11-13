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
        @can('admin')
    <hr>

    <h2>Stock Movement</h2>

    <form action="{{ route('stock-movements.store', $product->id) }}" method="POST">
        @csrf

        <label>Movement Type</label>
        <select name="type">
            <option value="in">Stock In</option>
            <option value="out">Stock Out</option>
        </select>

        <br><br>

        <label>Quantity</label>
        <input type="number" name="quantity" min="1" required>

        <br><br>

        <label>Note</label>
        <textarea name="note"></textarea>

        <br><br>

        <button type="submit">Save Stock Movement</button>
    </form>
@endcan

        <a class="btn" href="{{ route('products.index') }}">
            Back to Products
        </a>
        <hr>

<h2>Stock Movement History</h2>

@if($product->stockMovements->count() > 0)

    <table border="1" cellpadding="10">

        <thead>
            <tr>
                <th>Movement Type</th>
                <th>Quantity</th>
                <th>Note</th>
                <th>Date</th>
            </tr>
        </thead>

        <tbody>
            @foreach($product->stockMovements as $movement)

                <tr>
                    <td>{{ ucfirst($movement->type) }}</td>
                    <td>{{ $movement->quantity }}</td>
                    <td>{{ $movement->note }}</td>
                    <td>{{ $movement->created_at }}</td>
                </tr>

            @endforeach
        </tbody>

    </table>

@else

    <p>No stock movements found.</p>

@endif
    </div>
@endsection