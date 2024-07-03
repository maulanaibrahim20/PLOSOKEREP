<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\FuncCall;

class AparaturController extends Controller
{
 
    public function H_aparatur()
    {
        $aparatur = Aparatur::all();

        $aparaturChunks = $aparatur->chunk(4); // Membagi data aparatur menjadi grup berisi 4 item
        return view('H_aparatur', compact('aparaturChunks'));
    }



    public function aparatur(Request $request){
        $data = new Aparatur;

        if($request->get('search')){
            $data = $data->where('nama','LIKE','%'.$request->get('search').'%')
            ->orWhere('jabatan','LIKE','%'.$request->get('search').'%');
        }

        $data = $data->get();

        return view('backend.aparatur',compact('data','request'));
    }

    public function create(){
        
        return view('backend.aparatur-create');
    }

    public function store2(Request $request){
       $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $photo = $request->file('gambar');
       $filename = date('Y-m-d').$photo->getClientOriginalName();
       $path  = 'photo-aparatur/'.$filename; 

       Storage::disk('public')->put($path,file_get_contents($photo));

       $data['nama']      = $request->nama;
       $data['jabatan']   = $request->jabatan;
       $data['gambar']    = $filename;

       Aparatur::create($data);

       return redirect()->route('admin.aparatur');
    }

    public function edit(Request $request,$id){
        $data = Aparatur::find($id);

        return view('backend.edit-aparatur',compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
       ]);

       if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

       $data['nama']      = $request->nama;
       $data['jabatan']   = $request->jabatan;
       $data['gambar']    = $request->gambar;

       Aparatur::whereId($id)->update($data);

       return redirect()->route('aparatur');
    }

    public function delete(Request $request,$id){
        $data = Aparatur::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('admin.aparatur');
    }
}
