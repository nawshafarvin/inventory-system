@extends('layouts.app')

@section('title', 'Products List')

@section('content')
<p>Welcome, {{ Auth::user()->name }}</p>
<form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
    <h2>Products List</h2>
    @can('admin')
    <a href="{{ route('products.create') }}">Create Product</a>
@endcan

    @foreach ($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>

            <p>Stock: {{ $product->quantity }}</p>

            <p>
                Supplier: {{ $product->supplier?->name ?? 'No supplier assigned' }}
            </p>

            <p>
                Category: {{ $product->category?->name ?? 'No category assigned' }}
            </p>

            <p>
                Tags:
                @forelse ($product->tags as $tag)
                    {{ $tag->name }}@if (!$loop->last), @endif
                @empty
                    No tags assigned
                @endforelse
            </p>

            <a href="{{ route('products.show', $product->id) }}">
                View Details
            </a>
        </div>
        <hr>
    @endforeach
@endsection