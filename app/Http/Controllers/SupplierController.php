<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();
        // dd($suppliers);
        return view('supplier.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nama_supplier' => 'required|max:100',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|max:100|unique:suppliers,email'
        ]);

        try {
            Supplier::create($validated);
            return redirect()
                ->route('supplier.index')
                ->with('success', 'Supplier berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                ->route('supplier.index')
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        return view('supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nama_supplier' => 'required|max:100',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|max:100|unique:suppliers,email,' . $supplier->id
        ]);

        // dd($validated);
        try {
            $supplier->update($validated);
            return redirect()
                ->route('supplier.index')
                ->with('success', 'Supplier berhasil diubah.');
        } catch (QueryException $e) {
            return redirect()
                ->route('supplier.index')
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()
                ->route('supplier.index')
                ->with('success', 'Supplier berhasil dihapus.');
    }
}
