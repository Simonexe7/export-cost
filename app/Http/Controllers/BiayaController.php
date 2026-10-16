<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biaya = Biaya::all();
        return view('biaya.index', compact('biaya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biaya.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'nama_biaya' => 'required|max:100',
            'jenis_biaya' => 'required|max:30',
            'nilai_biaya' => 'required|numeric',
        ]);

        try {
            Biaya::create($validated);
            return redirect()
                    ->route('biaya.index')
                    ->with('success', 'Biaya berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('biaya.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Biaya $biaya)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biaya $biaya)
    {
        return view('biaya.edit', compact('biaya'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biaya $biaya)
    {
        $validated = $request->validate([
            'nama_biaya' => 'required|max:100',
            'jenis_biaya' => 'required|max:30',
            'nilai_biaya' => 'required|numeric',
        ]);

        try {
            $biaya->update($validated);
            return redirect()
                    ->route('biaya.index')
                    ->with('success', 'Biaya berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('biaya.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biaya $biaya)
    {
        $biaya->delete();
        return redirect()
                ->route('biaya.index')
                ->with('success', 'Biaya berhasil dihapus.');
    }
}
