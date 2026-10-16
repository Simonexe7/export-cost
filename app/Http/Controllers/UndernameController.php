<?php

namespace App\Http\Controllers;

use App\Models\Undername;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class UndernameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $undernames = Undername::all();
        return view('undername.index', compact('undernames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('undername.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_perusahaan' => 'required|max:100',
            'nomor_izin_ekspor' => 'required|numeric',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|max:100|unique:undernames,email',
            'fee' => 'required|numeric',
        ]);

        try {
            Undername::create($validated);
            return redirect()
                    ->route('undername.index')
                    ->with('success', 'Undername berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('undername.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Undername $undername)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Undername $undername)
    {
        return view('undername.edit', compact('undername'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Undername $undername)
    {
        $validated = $request->validate([
            'nama_perusahaan' => 'required|max:100',
            'nomor_izin_ekspor' => 'required|numeric',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|max:100|unique:undernames,email,' . $undername->id,
            'fee' => 'required|numeric',
        ]);

        try {
            $undername->update($validated);
            return redirect()
                    ->route('undername.index')
                    ->with('success', 'Undername berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('undername.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Undername $undername)
    {
        $undername->delete();
        return redirect()
                ->route('undername.index')
                ->with('success', 'Undername berhasil dihapus.');
    }
}
