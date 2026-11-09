<h1>Add New Category</h1>

<h2>Category Details</h2>
<form action="{{ route('categories.store') }}" method="POST">

    @csrf
    <label>Category Name</label>

<input type="text" name="name" value="{{ old('name') }}">

@error('name')
    <p style="color: red;">{{ $message }}</p>
@enderror
<label>Description</label>

<textarea name="description">{{ old('description') }}</textarea>

@error('description')
    <p style="color: red;">{{ $message }}</p>
@enderror
<button type="submit">Save Category</button>
</form>
<a href="{{ route('categories.index') }}">Back to Categories</a>