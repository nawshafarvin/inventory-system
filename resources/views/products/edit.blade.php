<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')
    <label>Product Name</label>
<input type="text" name="name" value="{{ $product->name }}">
<label>Description</label>
<textarea name="description">{{ $product->description }}</textarea>
<label>Price</label>
<input type="number" name="price" step="0.01" value="{{ $product->price }}">
<label>Quantity</label>
<input type="number" name="quantity" value="{{ $product->quantity }}">
<label>Category</label>
<select name="category_id">
    @foreach($categories as $category)
        <option value="{{ $category->id }}"
            {{ $product->category_id == $category->id ? 'selected' : '' }}>
            {{ $category->name }}
        </option>
    @endforeach
</select>
<label>Supplier</label>
<select name="supplier_id">
    @foreach($suppliers as $supplier)
        <option value="{{ $supplier->id }}"
            {{ $product->supplier_id == $supplier->id ? 'selected' : '' }}>
            {{ $supplier->name }}
        </option>
    @endforeach
</select>
<button type="submit">Update Product</button>

</form>