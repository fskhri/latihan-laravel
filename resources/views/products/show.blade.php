<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Harga: ${{ $product->price }}</p>
        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="max-width: 400px;">

        <!-- Tambahkan tombol atau form untuk menambahkan produk ke keranjang belanja jika diperlukan -->
    </div>
@endsection
