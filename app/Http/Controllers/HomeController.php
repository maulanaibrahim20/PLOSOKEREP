<?php

namespace App\Http\Controllers;

use App\Models\Aparatur;
use App\Models\Berita;
use App\Models\BorrowInventory;
use App\Models\Inventory;
use App\Models\Pengaduan;
use App\Models\PengajuanSurat;
use App\Models\ProfilDesa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function dashboard()
    {
        return view('backend.dashboard', [
            'total_berita' => Berita::count(),
            'total_user' => User::count(),
            'total_pengaduan' => Pengaduan::count(),
            'total_surat' => PengajuanSurat::count(),
            'total_aparatur' => Aparatur::count(),
            'latest_berita' => Berita::whereStatus(1)->latest()->take(5)->get(),
            'popular_berita' => Berita::whereStatus(1)->orderBy('views', 'desc')->take(5)->get()
        ]);
    }

    public function datapenduduk()
    {
        return view('backend.datapenduduk');
    }

    public function homepage()
    {
        return view('homepage', [
            'latest_post' => Berita::whereStatus(1)->latest()->take(3)->get(),
            'popular_berita' => Berita::whereStatus(1)->orderBy('views', 'desc')->take(5)->get(),
            'berita' => Berita::latest()->get(),
            'pd' => ProfilDesa::latest()->get()
        ]);
    }

    public function homepageadmin()
    {
        return view('homepageadmin');
    }


    public function user(Request $request)
    {
        $data = new User;

        if ($request->get('search')) {
            $data = $data->where('name', 'LIKE', '%' . $request->get('search') . '%')
                ->orWhere('email', 'LIKE', '%' . $request->get('search') . '%');
        }

        $data = $data->get();

        return view('backend.user', compact('data', 'request'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'nama' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email']       = $request->email;
        $data['name']        = $request->nama;
        $data['password']    = Hash::make($request->password);

        User::create($data);

        return redirect()->route('index');
    }


    public function inventoryUser()
    {
        $inventory = Inventory::all();

        $categories = $inventory->groupBy('category');

        return view('inventory', [
            'categories' => $categories,
        ]);
    }


    public function borrowInventory(Request $request)
    {
        $request->validate([
            'borrowerName' => 'required|string|max:255',
            'item_id' => 'required|exists:inventories,id',
            'quantity' => 'required|integer|min:1',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        DB::beginTransaction();
        try {
            $inventory = Inventory::findOrFail($request->item_id);

            if ($inventory->stock < $request->quantity) {
                return redirect()->back()->with('error', 'Stok barang tidak mencukupi.');
            }

            $inventory->stock -= $request->quantity;
            $inventory->save();

            BorrowInventory::create([
                'borrower_name' => $request->borrowerName,
                'inventory_id' => $inventory->id,
                'quantity' => $request->quantity,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
            ]);

            DB::commit();

            return redirect()->back()->with('success', 'Peminjaman berhasil diajukan.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat meminjam barang: ' . $e->getMessage());
        }
    }
}
