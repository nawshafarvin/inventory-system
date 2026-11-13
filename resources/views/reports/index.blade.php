@extends('layouts.app')

@section('title', 'Reports')

@section('content')

<div class="container mt-4">

    <h2 class="mb-4">Reports Home</h2>

    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Stock Value Report</h5>
                    <p>View the total value of available stock.</p>
                    <a href="#" class="btn btn-primary">View Report</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>Stock Movements Report</h5>
                    <p>View stock in and stock out details.</p>
                    <a href="{{ route('reports.stock-value') }}" class="btn btn-primary">
    View Report
</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5>My Own Report</h5>
                    <p>View your custom inventory report.</p>
                    <a href="{{ route('reports.category-stock') }}" class="btn btn-info">View Report</a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection