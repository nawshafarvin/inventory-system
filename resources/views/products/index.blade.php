@extends('layouts.app')

@section('title', 'Products List')

@section('content')
<p>Welcome, {{ Auth::user()->name }}</p>
<form action="/logout" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>
    <h2>Products List</h2>
    <form action="{{ route('products.index') }}" method="GET">

    <input
        type="text"
        name="search"
        placeholder="Search product name or SKU"
        value="{{ request('search') }}"
    >

    <select name="category_id">
        <option value="">All Categories</option>

        @foreach ($categories as $category)
            <option value="{{ $category->id }}"
                {{ request('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Search</button>

    <a href="{{ route('products.index') }}">Clear</a>

</form>
    @can('admin')
    <a href="{{ route('products.create') }}">Create Product</a>
@endcan

    @foreach ($products as $product)
        <div>
            @if ($product->image)
    <img src="{{ asset('storage/' . $product->image) }}" width="150">
@endif
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
            @can('admin')
    <a href="{{ route('products.edit', $product->id) }}">
        Edit Product
    </a>
@endcan
        </div>
        <hr>
        @endforeach

    <div>
        {{ $products->links() }}
    </div>

@endsection