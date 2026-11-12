@extends('layouts.app')

@section('title', 'Category Stock Report')

@section('content')

<div class="container mt-4">

    <h2>Category Stock Report</h2>

    <table class="table table-bordered mt-3">

        <thead>
            <tr>
                <th>Category Name</th>
                <th>Total Products</th>
                <th>Total Stock Quantity</th>
            </tr>
        </thead>

        <tbody>
            @foreach($categoryStocks as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->total_products }}</td>
                    <td>{{ $category->total_quantity }}</td>
                </tr>
            @endforeach
        </tbody>

    </table>

    <a href="{{ route('reports.index') }}" class="btn btn-secondary">
        Back to Reports
    </a>

</div>

@endsection