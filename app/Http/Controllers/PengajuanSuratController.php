<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PengajuanSurat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PengajuanSuratController extends Controller
{
    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Anda harus login untuk mengajukan surat.');
        }

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'nomor_hp' => 'required|string|max:255',
            'upload_surat' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

        DB::beginTransaction();
        try {
            $filePath = $request->file('upload_surat')->store('public/surat');

            PengajuanSurat::create([
                'nama_lengkap' => $request->nama_lengkap,
                'nik' => $request->nik,
                'nomor_hp' => $request->nomor_hp,
                'upload_surat' => $filePath,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Pengajuan surat berhasil dikirim.');
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()->with('error', 'Terjadi kesalahan saat memproses pengajuan surat. Silakan coba lagi.' . $e->getMessage());
        }
    }


    public function surata()
    {

        return view('H_surata');
    }

    public function index()
    {
        $data = PengajuanSurat::all();
        return view('backend.manajemen_pengajuan_surat', compact('data'));
    }

    public function destroy($id)
    {
        $pengajuanSurat = PengajuanSurat::findOrFail($id);
        $pengajuanSurat->delete();

        return redirect()->route('backend.manajemen_pengajuan_surat')->with('success', 'Data berhasil dihapus');
    }
}
