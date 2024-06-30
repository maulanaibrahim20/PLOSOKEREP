<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminUmkmController extends Controller
{
    public function dashboard_umkm(){
        return view('admin_umkm.dashboard_umkm', [
            'total_produk' => Product::count(),
        ]);
    }

    public function product(){
        return view('umkm.product');
    }



    public function orders()
    {
        // Mengambil semua pesanan dengan status paid
        $orders = Cart::where('status', 'paid')->get();
        return view('admin.orders', compact('orders'));
    }

}
