<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\FuncCall;

class PengaduanController extends Controller
{
 
    public function pengaduan(Request $request){
        $data = new Pengaduan();

        if($request->get('search')){
            $data = $data->where('nama','LIKE','%'.$request->get('search').'%')
            ->orWhere('no_tlp','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('backend.pengaduan',compact('data','request'));
    }

    public function create_pengaduan(){
        
        return view('backend.pengaduan_create');
    }

    public function simpan_pengaduan(Request $request){
       $validator = Validator::make($request->all(),[
            'nama' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'rincian_pengaduan' => 'required|string',

            
       ]);


    if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       

       $data['nama']      = $request->nama;
       $data['no_tlp']   = $request->no_tlp;
       $data['rincian_pengaduan']     = $request->rincian_pengaduan;
       

       Pengaduan::create($data);

       return redirect()->route('admin.pengaduan');
    }

    

    public function delete_pengaduan(Request $request,$id){
        $data = Pengaduan::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.pengaduan');
    }
}

