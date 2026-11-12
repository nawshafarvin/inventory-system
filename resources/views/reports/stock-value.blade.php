@extends('layouts.app')

@section('title', 'Stock Value Report')

@section('content')

<div class="container mt-4">

    <h2>Stock Value Report</h2>

    <div class="card mt-4">
        <div class="card-body">

            <h5>Total Stock Value</h5>

            <h2 class="text-success">
                Rs. {{ number_format($stockValue ?? 0, 2) }}
            </h2>

        </div>
    </div>

    <a href="{{ route('reports.index') }}" class="btn btn-secondary mt-3">
        Back to Reports
    </a>

</div>

@endsection