@extends('layouts.app')

@section('title', 'Supplier List')

@section('content')
    <h2>Supplier List</h2>

    @foreach ($suppliers as $supplier)
        <div>
            <h3>{{ $supplier['name'] }}</h3>

            <p>Email: {{ $supplier['email'] ?? 'Not available' }}</p>
            <p>Phone: {{ $supplier['phone'] ?? 'Not available' }}</p>

            <a href="{{ route('suppliers.show', $supplier['id']) }}">
                View Details
            </a>
        </div>
        <hr>
    @endforeach
@endsection