@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Suppliers List</h1>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($suppliers as $supplier)
                <tr>
                    <td>{{ $supplier['id'] }}</td>
                    <td>{{ $supplier['name'] }}</td>
                    <td>{{ $supplier['email'] }}</td>
                    <td>{{ $supplier['phone'] }}</td>

                    <td>
                        <a href="{{ route('suppliers.show', $supplier['id']) }}">
                            View Details
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection