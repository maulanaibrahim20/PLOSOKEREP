<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfilDesaController extends Controller
{
    public function profildesa(Request $request){
        $data = new ProfilDesa();

        if($request->get('search')){
            $data = $data->where('visi','LIKE','%'.$request->get('search').'%')
            ->orWhere('misi','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('backend.profildesa',compact('data','request'));
    }

    public function create_profildesa(){
        return view('backend.profildesa_create');
    }

    public function simpan_profildesa(Request $request){
       $validator = Validator::make($request->all(),[
            'visi_misi' => 'required|string',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['visi_misi'] = $request->visi_misi;
       
       ProfilDesa::create($data);

       return redirect()->route('admin.profildesa');
    }

    public function delete_profildesa(Request $request,$id){
        $data = ProfilDesa::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.profildesa');
    }

    // Tambahkan metode ini untuk menampilkan visi_misi di view
    public function show_visi_misi(){
        $pd = ProfilDesa::first(); // Asumsikan hanya ada satu profil desa, jadi kita ambil yang pertama

        return view('visi-misi', compact('pd'));
    }
}
