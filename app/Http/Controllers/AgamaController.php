<?php

namespace App\Http\Controllers;

use App\Models\Agama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AgamaController extends Controller
{
    public function Agama()
    {
        $agama = Agama::all();
        return view('agama', compact('agama'));
    }




    public function m_agama (Request $request){
        $data = new Agama ;

        if($request->get('search')){
            $data = $data->where('agama','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('backend.m_agama',compact('data','request'));
    }

    public function create_agama(){
        
        return view('backend.create_agama');
    }

    public function simpan_agama(Request $request){
       $validator = Validator::make($request->all(),[
            'agama' => 'required',
            'jumlah' => 'required',
       ]);

       

       $data['agama']      = $request->agama;
       $data['jumlah']   = $request->jumlah;
     

       Agama::create($data);

       return redirect()->route('admin.m_agama');
    }

    public function edit_agama(Request $request,$id){
        $data = Agama::find($id);

        return view('backend.edit-agama',compact('data'));
    }

    public function update_agama(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'agama' => 'required',
            'jumlah' => 'required',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['agama']      = $request->agama;
       $data['jumlah']   = $request->jumlah;

       Agama::whereId($id)->update($data);

       return redirect()->route('admin.m_agama');
    }

    public function delete_agama(Request $request,$id){
        $data = Agama::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.m_agama');
    }

}
