<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::id())->with('product')->get();
        return view('Cart', compact('cartItems'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);
        if(!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Simpan data ke dalam cart
        $cartItem = new Cart();
        $cartItem->user_id = Auth::id();
        $cartItem->product_id = $id;
        $cartItem->quantity = $request->quantity;
        $cartItem->customer_name = $request->customer_name;
        $cartItem->customer_address = $request->customer_address;
        // Tambahkan validasi atau default value lainnya sesuai kebutuhan

        $cartItem->save();

        return redirect()->route('Cart')->with('success', 'Product added to cart.');
    }


    public function updateCart(Request $request, $id)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();
        if($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
            return redirect()->route('Cart')->with('success', 'Cart updated.');
        }

        return redirect()->route('Cart')->with('error', 'Cart item not found.');
    }

    public function removeCartItem($id)
    {
        $cartItem = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();
        if($cartItem) {
            $cartItem->delete();
            return redirect()->route('Cart')->with('success', 'Cart item removed.');
        }

        return redirect()->route('Cart')->with('error', 'Cart item not found.');
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_address' => 'required|string|max:255',
        ]);

        $cart = auth()->user()->cart;
        $cart->customer_name = $request->input('customer_name');
        $cart->customer_address = $request->input('customer_address');
        $cart->status = 'paid';
        $cart->save();

        // Logika tambahan untuk proses pembayaran dapat ditambahkan di sini

        return redirect()->route('cart.index')->with('success', 'Checkout berhasil!');
    }
}
