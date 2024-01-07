<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;

class CartController extends Controller
{
    public function index()
    {
        // Assuming you have a model for cart items (CartItem)
        $cartItems = CartItem::all();
        $cartTotal = $this->calculateTotal($cartItems);

        return view('cart.index', compact('cartItems', 'cartTotal'));
    }

    private function calculateTotal($cartItems)
    {
        // Logic to calculate the total based on cart items
        // Replace this with your own logic
        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item->product->price * $item->quantity;
        }

        return $total;
    }
}
