<h1>Edit Supplier</h1>

<form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Supplier Name</label>
    <input type="text" name="name" value="{{ $supplier->name }}">

    <br><br>

    <label>Email</label>
    <input type="email" name="email" value="{{ $supplier->email }}">

    <br><br>

    <label>Phone</label>
    <input type="text" name="phone" value="{{ $supplier->phone }}">

    <br><br>

    <label>Address</label>
    <textarea name="address">{{ $supplier->address }}</textarea>

    <br><br>

    <button type="submit">Update Supplier</button>

}
</form>