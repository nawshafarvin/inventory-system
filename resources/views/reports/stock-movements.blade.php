@extends('layouts.app')

@section('title', 'Stock Movements Report')

@section('content')

<div class="container mt-4">

    <h2>Stock Movements Report</h2>

    <div class="card mt-4">
        <div class="card-body">

            <h5>Total Stock Movements: {{ $movements->count() }}</h5>

            <table class="table table-bordered table-striped mt-3">

                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Movement Type</th>
                        <th>Quantity</th>
                        <th>Note</th>
                        <th>Date</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($movements as $movement)
                        <tr>
                            <td>{{ $movement->name }}</td>
                            <td>{{ ucfirst($movement->type) }}</td>
                            <td>{{ $movement->quantity }}</td>
                            <td>{{ $movement->note }}</td>
                            <td>{{ $movement->created_at }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                No stock movements found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>

        </div>
    </div>

    <a href="{{ route('reports.index') }}" class="btn btn-secondary mt-3">
        Back to Reports
    </a>

</div>

@endsection