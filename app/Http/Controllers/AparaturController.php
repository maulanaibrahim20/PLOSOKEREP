<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AparaturController extends Controller
{
 
    public function aparatur(){
        $data = Aparatur::get();
        return view('aparatur',compact('data'));
    }

    public function store2(Request $request){
       $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'jabatan' => 'required',
            'no_hp' => 'required',
            'gambar' => 'required',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['nama']      = $request->nama;
       $data['jabatan']   = $request->jabatan;
       $data['no_hp']     = $request->no_hp;
       $data['gambar']    = $request->gambar;

       Aparatur::create($data);

       return redirect()->route('aparatur');
    }

    public function edit(Request $request,$id){
        $data = Aparatur::find($id);

        return view('edit-aparatur',compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'jabatan' => 'required',
            'no_hp' => 'required',
            'gambar' => 'nullable',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['nama']      = $request->nama;
       $data['jabatan']   = $request->jabatan;
       $data['no_hp']     = $request->no_hp;
       $data['gambar']    = $request->gambar;

       Aparatur::whereId($id)->update($data);

       return redirect()->route('aparatur');
    }
}
