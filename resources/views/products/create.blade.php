<form action="{{ route('products.store') }}" method="POST">
    @csrf 
<h1>Add New Product</h1>

<label>Product Name</label>
<input type="text" name="name">
<label>Description</label>
<textarea name="description"></textarea>
<label>Price</label>
<input type="number" name="price" step="0.01">
<label>Quantity</label>
<input type="number" name="quantity">
<label>Category</label>
<select name="category_id">
    <option value="">Select Category</option>
    @foreach($categories as $category)
    <option value="{{ $category->id }}">
        {{ $category->name }}
    </option>
@endforeach
</select>
<label>Supplier</label>
<select name="supplier_id">
    <option value="">Select Supplier</option>
    @foreach($suppliers as $supplier)
    <option value="{{ $supplier->id }}">
        {{ $supplier->name }}
    </option>
@endforeach
</select>

<button type="submit">Save Product</button>