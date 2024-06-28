<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUmkmController extends Controller
{
    public function dashboard_umkm(){
        return view('admin_umkm.dashboard_umkm');
    }

    public function product(){
        return view('umkm.product');
    }
}
