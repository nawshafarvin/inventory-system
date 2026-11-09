<h1>User Management</h1>

<h2>Users List</h2>

@foreach ($users as $user)

    <h3>{{ $user->name }}</h3>

    <p>Email: {{ $user->email }}</p>

    <p>Role: {{ $user->role }}</p>

    <hr>

@endforeach