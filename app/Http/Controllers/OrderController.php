<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout(Request $request, $id)
{
    $product = Product::find($id);
    if (!$product) {
        return redirect()->back()->with('error', 'Product not found.');
    }

    $order = Order::create([
        'name' => $request->name,
        'address' => $request->address,
        'phone' => $request->phone,
        'qty' => $request->qty,
        'total_price' => $product->harga * $request->qty, // Hitung total harga
        'status' => 'Unpaid',
    ]);

    return view('cart', compact('order'));
}


    public function viewCart()
    {
        return view('cart');
    }

    public function delete($id)
{
    $order = Order::find($id);
    if ($order) {
        $order->delete();
        return redirect()->route('cart.view')->with('success', 'Order has been deleted.');
    }
    return redirect()->route('cart.view')->with('error', 'Order not found.');
}
}
