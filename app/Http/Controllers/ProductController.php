<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_product' => 'required|max:100',
            'grade' => 'required|max:20',
            'satuan' => 'required|max:20'
        ]);

        try {
            Product::create($validated);
            return redirect()
                    ->route('product.index')
                    ->with('success', 'Product berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('product.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'nama_product' => 'required|max:100',
            'grade' => 'required|max:20',
            'satuan' => 'required|max:20'
        ]);

        try {
            $product->update($validated);
            return redirect()
                    ->route('product.index')
                    ->with('success', 'Product berhasil ditambahkan.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('product.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()
                ->route('product.index')
                ->with('success', 'Product berhasil dihapus.');
    }
}
