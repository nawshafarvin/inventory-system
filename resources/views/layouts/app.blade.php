<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Inventory System')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="{{ route('dashboard') }}">
                Inventory System
            </a>

            <div class="navbar-nav">
    <a class="nav-link" href="{{ url('/') }}">Home</a>
    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
    <a class="nav-link" href="{{ route('products.index') }}">Products</a>
    <a class="nav-link" href="{{ route('suppliers.index') }}">Suppliers</a>

    @auth
        <a class="nav-link" href="{{ route('reports.index') }}">Reports</a>
        <a class="nav-link" href="/categories">Categories</a>

<a class="nav-link" href="/low-stock">Low Stock</a>

@can('admin')
    <a class="nav-link" href="/admin-dashboard">Admin</a>
@endcan

        <form action="{{ url('/logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-link btn btn-link">
                Logout
            </button>
        </form>
    @endauth

    @guest
        <a class="nav-link" href="{{ route('login') }}">Login</a>
    @endguest
</div>

        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>