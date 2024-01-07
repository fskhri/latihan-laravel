<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\Controller as UserSettingsController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\ProfilesController;
use App\Models\CartItem;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/user/settings', [UserSettingsController::class, 'index'])->name('user.settings.index');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('activities');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('products', 'ProductController');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/profiles', [ProfilesController::class, 'index'])->name('profiles.index');
Route::get('/profiles/{id}', [ProfilesController::class, 'show'])->name('profiles.show');
Route::get('/profiles/{id}/edit', [ProfilesController::class, 'edit'])->name('profiles.edit');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::put('/profiles/{id}', [ProfilesController::class, 'update'])->name('profiles.update');
Route::get('/add-to-cart/{product}', function (\App\Models\Product $product) {
    $user = auth()->user();

    // Check if the item is already in the cart
    $cartItem = CartItem::where('user_id', $user->id)
        ->where('product_id', $product->id)
        ->first();

    if ($cartItem) {
        // If the item is in the cart, increment the quantity
        $cartItem->update(['quantity' => $cartItem->quantity + 1]);
    } else {
        // If not, create a new cart item
        CartItem::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
            'quantity' => 1,
        ]);
    }

    return redirect()->back()->with('success', 'Item added to cart successfully.');
});
