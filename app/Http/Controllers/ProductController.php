<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function product(){
        return view('admin_umkm.produk', [
            'products' => Product::latest()->get()
        ]);
    }

    public function umkm_d(){
        return view('UMKM-D',[
            'latest_post' => Product::latest()->first(),
            'product' => Product::latest()->get()
        ]);
    }

    public function umkm_da(){
        return view('UMKM-Da',[
            'latest_post' => Product::latest()->first(),
            'product' => Product::latest()->get()
        ]);
    }

    // public function umkm_e(){
    //     return view('UMKM-e',[
    //         'Product' => Product::latest()->get()
    //     ]);
        
    // }

    public function umkm_e($id) {
        $Product = Product::findOrFail($id);
        return view('UMKM-e', compact('Product'));
    }

    public function umkm_ea($id) {
        $Product = Product::findOrFail($id);
        return view('UMKM-ea', compact('Product'));
    }

    public function umkm_c($id) {
        $Product = Product::findOrFail($id);
        return view('UMKM-c', compact('Product'));
    }

    public function umkm_ca($id) {
        $Product = Product::findOrFail($id);
        return view('UMKM-ca', compact('Product'));
    }
    
    

    public function create_produk(){
        return view('admin_umkm.create_produk');
    }

    public function simpan_produk(ProductRequest $request) {
        $data = $request->validated();

        $file = $request->file('img_produk');
        $filename = uniqid().'.'.$file->getClientOriginalExtension();
        $file->storeAs('public/gambar/Product/', $filename);

        $data['img_produk'] = $filename;

        Product::create($data);

        return redirect()->route('umkm.product')->with('success', 'Data Product berhasil dibuat');
    } 

    // public function show(string $id){
    //     return view('backend.show', [
    //         'Product' => Product::find($id)
    //     ]);
    // }

    public function delete_produk(Request $request,string $id){
        $data = Product::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('umkm.product');
    }

    public function edit_produk(string $id){
        return view('admin_umkm.update_produk', [
            'products' => Product::find($id)
        ]);
    }

    public function update_produk(UpdateProductRequest $request, string $id) {
        $data = $request->validated();
    
        if ($request->hasFile('img_produk')) {
            $file = $request->file('img_produk');
            $filename = uniqid().'.'.$file->getClientOriginalExtension();
            $file->storeAs('public/gambar/Product/', $filename);
    
            // Hapus gambar lama jika ada 
            if ($request->oldImg) {
                Storage::delete('public/gambar/Product/'.$request->oldImg);
            }
    
            $data['img_produk'] = $filename;
        } else {
            $data['img_produk'] = $request->oldImg;
        }
    
        Product::find($id)->update($data);
    
        return redirect()->route('umkm.product')->with('success', 'Data Product berhasil diperbarui');
    }
    
    
}
