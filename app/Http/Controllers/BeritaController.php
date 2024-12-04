<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function m_berita()
    {
        return view('backend.m_berita', [
            'berita' => Berita::latest()->get()
        ]);
    }

    public function berita()
    {
        return view('Berita', [
            'latest_post' => Berita::latest()->first(),
            'popular_berita' => Berita::whereStatus(1)->orderBy('views', 'desc')->take(5)->get(),
            'berita' => Berita::wherestatus(1)->latest()->get()
        ]);
    }


    public function beritaklik($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->increment('views'); // Tambahkan jumlah tampilan
        return view('Beritaklik', compact('berita'));
    }



    public function create_m_berita()
    {
        return view('backend.m_berita_create');
    }

    public function simpan_m_berita(BeritaRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('img');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/gambar/berita/', $filename);

        $data['img'] = $filename;
        $data['slug'] = Str::slug($data['title']);
        $data['publish_date'] = $request->input('publish_date');

        Berita::create($data);

        return redirect()->route('admin.m_berita')->with('success', 'Data berita berhasil dibuat');
    }

    public function show(string $id)
    {
        return view('backend.show', [
            'berita' => Berita::find($id)
        ]);
    }


    public function delete_m_berita(Request $request, $id)
    {
        $data = Berita::find($id);

        if ($data) {
            $data->delete();
        }

        return redirect()->route('admin.m_berita');
    }

    public function edit_m_berita(string $id)
    {
        return view('backend.m_berita_update', [
            'berita' => Berita::find($id)
        ]);
    }

    public function update_m_berita(UpdateBeritaRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/gambar/berita/', $filename);

            Storage::delete('public/gambar/berita/' . $request->oldImg);

            $data['img'] = $filename;
        } else {
            $data['img'] = $request->oldImg;
        }


        $data['slug'] = Str::slug($data['title']);

        Berita::find($id)->update($data);

        return redirect()->route('admin.m_berita')->with('success', 'Data berita berhasil diperbarui');
    }
}
