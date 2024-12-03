<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class InventoryController extends Controller
{
    protected $inventory;

    public function __construct(Inventory $inventory)
    {
        $this->inventory = $inventory;
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of($this->inventory->query())->addIndexColumn()->toJson();
        }
        return view('backend.inventory.index');
    }

    public function create()
    {
        return view('backend.inventory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'category' => 'required|string|max:255',
            'stock' => 'required|integer|min:1',
        ]);

        DB::beginTransaction();
        try {
            $this->inventory->create([
                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category,
                'stock' => $request->stock,
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

    public function edit($uuid)
    {
        $data = [
            'inventory' => $this->inventory->where('uuid', $uuid)->first()
        ];
        if (!$data) {
            return back()->with('error', 'Inventory Not Found');
        }
        return view('backend.inventory.edit', $data);
    }

    public function update(Request $request, $uuid)
    {
        DB::beginTransaction();
        try {
            $inventory = $this->inventory->where('uuid', $uuid)->first();
            if (!$inventory) {
                return response()->json(['status' => 'error', 'message' => 'Inventory Not Found'], 404);
            }

            $inventory->update([
                'name' => $request->name,
                'description' => $request->description,
                'category' => $request->category,
                'stock' => $request->stock,
            ]);

            DB::commit();

            return response()->json(['status' => 'success', 'message' => 'Inventory Updated Successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }


    public function show($uuid)
    {
        $data['show'] = $this->inventory->where('uuid', $uuid)->first();
        return view('backend.inventory.view', $data);
    }

    public function destroy($uuid)
    {
        try {
            $inventory = Inventory::whereUuid($uuid)->first();
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
