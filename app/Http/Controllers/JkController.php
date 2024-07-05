<?php

namespace App\Http\Controllers;

use App\Models\Jk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class JkController extends Controller
{
    public function kelamin()
    {
        $jk = Jk::all();
        return view('kelamin', compact('jk'));
    }




    public function m_jk (Request $request){
        $data = new Jk ;

        if($request->get('search')){
            $data = $data->where('jk','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('backend.m_jk',compact('data','request'));
    }

    public function create_jk(){
        
        return view('backend.create_jk');
    }

    public function simpan_jk(Request $request){
       $validator = Validator::make($request->all(),[
            'jk' => 'required',
            'jumlah' => 'required',
       ]);

       

       $data['jk']      = $request->jk;
       $data['jumlah']   = $request->jumlah;
     

       Jk::create($data);

       return redirect()->route('admin.m_jk');
    }

    public function edit_jk(Request $request,$id){
        $data = Jk::find($id);

        return view('backend.edit-jk',compact('data'));
    }

    public function update_jk(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'jk' => 'required',
            'jumlah' => 'required',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['jk']      = $request->jk;
       $data['jumlah']   = $request->jumlah;

       Jk::whereId($id)->update($data);

       return redirect()->route('admin.m_jk');
    }

    public function delete_jk(Request $request,$id){
        $data = Jk::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.m_jk');
    }

}

