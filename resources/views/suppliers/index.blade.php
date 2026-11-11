@extends('layouts.app')

@section('title', 'Supplier List')

@section('content')
    <h2>Supplier List</h2>
    <form action="{{ route('suppliers.index') }}" method="GET">

    <input
        type="text"
        name="search"
        placeholder="Search supplier name"
        value="{{ request('search') }}"
    >

    <button type="submit">Search</button>

    <a href="{{ route('suppliers.index') }}">Clear</a>

</form> 

    @foreach ($suppliers as $supplier)
        <div>
            <h3>{{ $supplier['name'] }}</h3>

            <p>Email: {{ $supplier['email'] ?? 'Not available' }}</p>
            <p>Phone: {{ $supplier['phone'] ?? 'Not available' }}</p>

            <a href="{{ route('suppliers.show', $supplier['id']) }}">
                View Details
            </a>
            @can('admin')
    <a href="{{ route('suppliers.edit', $supplier->id) }}">
        Edit Supplier
    </a>
    
    <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete Supplier</button>
    </form>
@endcan

        </div>
        <hr>
        @endforeach

    <div>
      {{ $suppliers->links() }}
    </div>

@endsection