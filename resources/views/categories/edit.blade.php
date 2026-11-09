<h1>Edit Category</h1>

<h2>Update Category Details</h2>
<form action="{{ route('categories.update', $category->id) }}" method="POST">

    @csrf
    @method('PUT')
    <label>Category Name</label>

<input type="text" name="name" value="{{ old('name', $category->name) }}">

@error('name')
    <p style="color: red;">{{ $message }}</p>
@enderror
<label>Description</label>

<textarea name="description">{{ old('description', $category->description) }}</textarea>

@error('description')
    <p style="color: red;">{{ $message }}</p>
@enderror
<button type="submit">Update Category</button>

</form>
<a href="{{ route('categories.index') }}">Back to Categories</a>