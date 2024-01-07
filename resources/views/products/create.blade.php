<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" required>
    
    <label for="description">Description:</label>
    <textarea name="description" required></textarea>
    
    <label for="price">Price:</label>
    <input type="number" name="price" required>
    
    <button type="submit">Create Product</button>
</form>
