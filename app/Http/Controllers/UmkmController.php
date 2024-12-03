<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class UmkmController extends Controller
{
    protected $umkm;

    public function __construct(Umkm $umkm)
    {
        $this->umkm = $umkm;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of($this->umkm->query())->addIndexColumn()->toJson();
        }
        return view('backend.umkm.index');
    }

    public function create()
    {
        return view('backend.umkm.create');
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $this->umkm->create([
                'name' => $request['name'],
                'owner_name' => $request['owner_name'],
                'category' => $request['category'],
                'address' => $request['address'],
                'description' => $request['description'],
                'contact' => $request['contact'],
            ]);

            DB::commit();

            return response()->json([
                'status' => 'success',
                'message' => 'Inventory Added Successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function edit(Request $request, $uuid)
    {
        $data['umkm'] = $this->umkm->where('uuid', $uuid)->first();
        if (!$data) {
            return response()->json([
                'status' => 'error',
                'message' => 'UMKM not found',
            ]);
        }
        return view('backend.umkm.edit', $data);
    }

    public function update(Request $request, $uuid)
    {
        DB::beginTransaction();
        try {
            $umkm = $this->umkm->whereUuid($uuid)->first();
            if (!$umkm) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'UMKM not found',
                ]);
            }

            $umkm->update([
                'name' => $request['name'],
                'owner_name' => $request['owner_name'],
                'category' => $request['category'],
                'address' => $request['address'],
                'description' => $request['description'],
                'contact' => $request['contact'],
            ]);

            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'UMKM updated successfully',
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }

    public function show($uuid)
    {
        $data['show'] = $this->umkm->where('uuid', $uuid)->first();
        return view('backend.umkm.view', $data);
    }

    public function destroy(Request $request, $uuid)
    {
        try {
            $inventory = $this->umkm::whereUuid($uuid)->first();
            $inventory->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat menghapus data.' . $e->getMessage(),
            ], 500);
        }
    }
}
