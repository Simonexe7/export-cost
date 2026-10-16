<?php

namespace App\Http\Controllers;

use App\Models\Forwarder;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ForwarderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forwarders = Forwarder::all();
        return view('forwarder.index', compact('forwarders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forwarder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_perusahaan' => 'required|max:100',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|max:100|unique:forwarders,email'
        ]);
        
        try {
            Forwarder::create($validated);
            return redirect()
                    ->route('forwarder.index')
                    ->with('success', 'Freight Forwarder berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('forwarder.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Forwarder $forwarder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Forwarder $forwarder)
    {
        return view('forwarder.edit', compact('forwarder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Forwarder $forwarder)
    {
        $validated = $request->validate([
            'nama_perusahaan' => 'required|max:100',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|max:100|unique:forwarders,email,' . $forwarder->id
        ]);
        
        try {
            $forwarder->update($validated);
            return redirect()
                    ->route('forwarder.index')
                    ->with('success', 'Freight Forwarder berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('forwarder.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Forwarder $forwarder)
    {
        $forwarder->delete();
        return redirect()
                ->route('forwarder.index')
                ->with('success', 'Freight Forwarder berhasil dihapus.');
    }
}
