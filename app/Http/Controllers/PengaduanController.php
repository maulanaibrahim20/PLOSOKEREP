<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PengaduanController extends Controller
{
    public function pengaduan(Request $request)
    {
        $data = new Pengaduan();

        if ($request->get('search')) {
            $data = $data->where('nama', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('no_tlp', 'LIKE', '%' . $request->get('search') . '%');
        }

        $data = $data->get();

        return view('backend.pengaduan', compact('data', 'request'));
    }

    public function H_pengaduan()
    {
        return view('H_pengaduan');
    }

    public function pengaduanadmin()
    {

        return view('H_pengaduanadmin');
    }

    public function simpan_pengaduan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'rincian_pengaduan' => 'required|string',
            'foto' => 'nullable|file|image|mimes:jpeg,png,jpg|max:2048', // Maksimal 2MB
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $fotoPath = '';

            if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
                $fotoPath = $request->file('foto')->store('pengaduan_foto', 'public');
            }

            Pengaduan::create([
                'nama' => $request->input('nama'),
                'no_tlp' => $request->input('no_tlp'),
                'rincian_pengaduan' => $request->input('rincian_pengaduan'),
                'foto' => $fotoPath,
            ]);

            DB::commit();

            return redirect()->route('H_pengaduan')->with('success', 'Pengaduan berhasil dikirim.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function delete_pengaduan(Request $request, $id)
    {
        $data = Pengaduan::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('pengaduan');
    }
}
