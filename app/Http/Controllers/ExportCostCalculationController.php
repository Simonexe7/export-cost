<?php

namespace App\Http\Controllers;

use App\Models\Biaya;
use App\Models\Detail_biaya;
use App\Models\Export_cost_calculation;
use App\Models\Forwarder;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Undername;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExportCostCalculationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd($eec->id);
        $forwarders = Forwarder::all();
        $suppliers = Supplier::all();
        $undernames = Undername::all();
        $products = Product::all();
        $biayas = Biaya::all();
        $nomorKalkulasi = 'KAL-' .
            now()->format('Ymd') . '-' .
            str_pad(
                Export_cost_calculation::whereDate('created_at', today())->count() + 1,
                3,
                '0',
                STR_PAD_LEFT
            );
        return view('kalkulasi.index', compact('biayas', 'forwarders', 'suppliers', 'undernames', 'products', 'nomorKalkulasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $biayas = Biaya::all();
        return view('kalkulasi.create', compact('biayas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_kalkulasi' => 'required',
            'quantity' => 'required|numeric|min:1',
            'harga_beli' => 'required|numeric',
            'total_biaya' => 'required|numeric',
            'tanggal' => 'required|date',
            'supplier_id' => 'required|exists:suppliers,id',
            'product_id' => 'required|exists:products,id',
            'forwarder_id' => 'required|exists:forwarders,id',
            'undername_id' => 'required|exists:undernames,id',
            'margin_persen' => 'required|numeric|min:1|max:100',
            'harga_jual' => 'required|numeric',
            'unit_price' => 'required|numeric',
            'estimasi_keuntungan' => 'required|numeric',

        ]);
        
        DB::transaction(function () use ($validated) {

        // 1. SIMPAN KALKULASI UTAMA
        $calculation = Export_cost_calculation::create([
            'nomor_kalkulasi' => $validated['nomor_kalkulasi'],
            'tanggal' => $validated['tanggal'],
            'supplier_id' => $validated['supplier_id'],
            'product_id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
            'harga_beli' => $validated['harga_beli'],
            'harga_jual' => $validated['harga_jual'],
            'unit_price' => $validated['unit_price'],
            'forwarder_id' => $validated['forwarder_id'],
            'undername_id' => $validated['undername_id'],
            'margin_persen' => $validated['margin_persen'],

            'total_biaya' => $validated['total_biaya'],
            'estimasi_keuntungan' => $validated['estimasi_keuntungan'],
        ]);


        // 2. AMBIL DETAIL BIAYA DARI JSON
        $detailBiaya = json_decode(
            $validated['detail_biaya'] ?? '[]',
            true
        );


        // 3. SIMPAN DETAIL BIAYA
        foreach ($detailBiaya as $detail) {

            $calculation->details()->create([
                'biaya_id' => $detail['biaya_id'],
                'nilai' => $detail['nilai'],
                'jumlah' => $detail['jumlah'],
                'subtotal' =>
                    $detail['nilai'] * $detail['jumlah'],
            ]);
        }
    });


    return redirect()
        ->route('export_cost_calculation.index')
        ->with('success', 'Kalkulasi berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Export_cost_calculation $export_cost_calculation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Export_cost_calculation $export_cost_calculation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Export_cost_calculation $export_cost_calculation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Export_cost_calculation $export_cost_calculation)
    {
        //
    }
}
