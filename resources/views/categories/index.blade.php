<h1>Category Management</h1>

<h2>Category List</h2>

<a href="{{ route('categories.create') }}">Add New Category</a>

@foreach ($categories as $category)

    <h3>{{ $category->name }}</h3>

    <p>{{ $category->description }}</p>

    <a href="{{ route('categories.edit', $category->id) }}">Edit</a>

    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit">Delete</button>
    </form>

@endforeach