<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Supplier;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buyers = Buyer::all();
        return view('buyer.index', compact('buyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buyer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_buyer' => 'required|max:100',
            'negara' => 'required|max:100',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|max:100|unique:buyers,email'
        ]);

        try {
            Buyer::create($validated);
            return redirect()
                    ->route('buyer.index')
                    ->with('success', 'Buyer berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('buyer.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Buyer $buyer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buyer $buyer)
    {
        return view('buyer.edit', compact('buyer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buyer $buyer)
    {
        $validated = $request->validate([
            'nama_buyer' => 'required|max:100',
            'negara' => 'required|max:100',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|max:100|unique:buyers,email,' . $buyer->id
        ]);

        try {
            $buyer->update($validated);
            return redirect()
                    ->route('buyer.index')
                    ->with('success', 'Buyer berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('buyer.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buyer $buyer)
    {
        $buyer->delete();
        return redirect()
                ->route('buyer.index')
                ->with('success', 'Buyer berhasil dihapus.');
    }
}
