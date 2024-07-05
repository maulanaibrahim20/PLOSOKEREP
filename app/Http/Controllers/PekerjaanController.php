<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PekerjaanController extends Controller
{
    public function pekerjaan()
    {
        $pekerjaan = Pekerjaan::all();
        return view('pekerjaan', compact('pekerjaan'));
    }




    public function m_Pekerjaan (Request $request){
        $data = new Pekerjaan ;

        if($request->get('search')){
            $data = $data->where('pekerjaan','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('backend.m_pekerjaan',compact('data','request'));
    }

    public function create_pekerjaan(){
        
        return view('backend.create_pekerjaan');
    }

    public function simpan_pekerjaan(Request $request){
       $validator = Validator::make($request->all(),[
            'pekerjaan' => 'required',
            'jumlah' => 'required',
       ]);

       

       $data['pekerjaan']      = $request->pekerjaan;
       $data['jumlah']   = $request->jumlah;
     

       Pekerjaan::create($data);

       return redirect()->route('admin.m_pekerjaan');
    }

    public function edit_agama(Request $request,$id){
        $data = Pekerjaan::find($id);

        return view('backend.edit-pekerjaan',compact('data'));
    }

    public function update_agama(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'pekerjaan' => 'required',
            'jumlah' => 'required',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['pekerjaan']      = $request->pekerjaan;
       $data['jumlah']   = $request->jumlah;

       Pekerjaan::whereId($id)->update($data);

       return redirect()->route('admin.m_pekerjaan');
    }

    public function delete_agama(Request $request,$id){
        $data = Pekerjaan::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.m_pekerjaan');
    }

}
