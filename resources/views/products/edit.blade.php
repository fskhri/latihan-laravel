<form method="POST" action="{{ route('products.update', $product->id) }}">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $product->name }}" required>
    
    <label for="description">Description:</label>
    <textarea name="description" required>{{ $product->description }}</textarea>
    
    <label for="price">Price:</label>
    <input type="number" name="price" value="{{ $product->price }}" required>
    
    <button type="submit">Update Product</button>
</form>
