<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory System</title>
</head>
<body>

    <nav>
        <a href="{{ url('/products') }}">Products</a> |
        <a href="{{ url('/categories') }}">Categories</a> |
        <a href="{{ route('suppliers.index') }}">Suppliers</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>

</body>
</html> 