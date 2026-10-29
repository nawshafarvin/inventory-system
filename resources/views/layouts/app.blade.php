<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Inventory System')</title>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a> |
        <a href="{{ route('products.index') }}">Products</a> |
        <a href="{{ route('suppliers.index') }}">Suppliers</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>
</body>
</html>
