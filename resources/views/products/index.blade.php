@extends('layouts.app')

@section('title', 'Products List')

@section('content')
    <h2>Products List</h2>

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