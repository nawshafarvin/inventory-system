<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf 
<h1>Add New Product</h1>

<label>Product Name</label>
<input type="text" name="name">

@error('name')
    <p style="color: red;">{{ $message }}</p>
@enderror

<label>Description</label>
<textarea name="description"></textarea>

@error('description')
    <p style="color: red;">{{ $message }}</p>
@enderror



<label>Price</label>
<input type="number" name="price" step="0.01">

@error('price')
    <p style="color: red;">{{ $message }}</p>
@enderror


<label>Quantity</label>
<input type="number" name="quantity">
<label>Product Image</label>
<input type="file" name="image">

@error('quantity')
    <p style="color: red;">{{ $message }}</p>
@enderror
<label>Category</label>
<select name="category_id">
    <option value="">Select Category</option>
    @foreach($categories as $category)
    <option value="{{ $category->id }}">
        {{ $category->name }}
    </option>
@endforeach
</select>  

@error('category_id')
    <p style="color: red;">{{ $message }}</p>
@enderror

<label>Supplier</label>
<select name="supplier_id">
    <option value="">Select Supplier</option>
    @foreach($suppliers as $supplier)
    <option value="{{ $supplier->id }}">
        {{ $supplier->name }}
    </option>
@endforeach
</select>

@error('supplier_id')
    <p style="color: red;">{{ $message }}</p>
@enderror

<button type="submit">Save Product</button>