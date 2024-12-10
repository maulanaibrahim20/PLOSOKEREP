<?php

namespace App\Http\Controllers;

use App\Models\BorrowInventory;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class InventoryBorrowController extends Controller
{
    protected $peminjaman;

    public function __construct(BorrowInventory $peminjaman)
    {
        $this->peminjaman = $peminjaman;
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of($this->peminjaman->query()->with('inventory'))
                ->filter(function ($query) use ($request) {
                    if ($search = $request->input('search.value')) {
                        $query->where(function ($q) use ($search) {
                            $q->where('borrower_name', 'like', "%{$search}%")
                                ->orWhere('quantity', 'like', "%{$search}%")
                                ->orWhere('start_date', 'like', "%{$search}%")
                                ->orWhere('end_date', 'like', "%{$search}%")
                                ->orWhereHas('inventory', function ($q) use ($search) {
                                    $q->where('name', 'like', "%{$search}%");
                                });
                        });
                    }
                })
                ->addIndexColumn()
                ->toJson();
        }
        return view('backend.peminjaman_barang.index');
    }
}
