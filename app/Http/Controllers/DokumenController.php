<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Export_cost_calculation;
use App\Models\Quotation;
use App\Models\SalesContract;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quotations = Quotation::with('calculation')->get();
        return view('dokumen.index', compact('quotations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buyers = Buyer::all();
        $export_costs = Export_cost_calculation::with('products')->get();
        return view('dokumen.create', compact('buyers', 'export_costs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal' => 'required|date',
            'valid_until' => 'required|date|after_or_equal:tanggal',
            'currency' => 'required',
            'exchange_rate' => 'nullable',
            'incoterm' => 'required',
            'pol' => 'nullable',
            'destination' => 'nullable',
            'payment_term' => 'nullable',
            'delivery_time' => 'nullable',
            'terms_conditions' => 'nullable',
            'buyer_id' => 'required|exists:buyers,id',
            'export_cost_calculation_id' => 'required|exists:export_cost_calculations,id',
        ]);

        // dd($validated);

        do {
            $quotationNumber = 'QTN-' . Str::upper(Str::random(6));
        } while (
            Quotation::where('nomor_quotation', $quotationNumber)->exists()
        );

        // dd($quotationNumber);
        try {
            Quotation::create([
                'nomor_quotation' => $quotationNumber,
                'tanggal' => $validated['tanggal'],
                'valid_until' => $validated['valid_until'],
                'currency' => $validated['currency'],
                'exchange_rate' => $validated['exchange_rate'],
                'incoterm' => $validated['incoterm'],
                'pol' => $validated['pol'],
                'destination' => $validated['destination'],
                'payment_term' => $validated['payment_term'],
                'delivery_time' => $validated['delivery_time'],
                'terms_conditions' => $validated['terms_conditions'],
                'buyer_id' => $validated['buyer_id'],
                'export_cost_calculation_id' => $validated['export_cost_calculation_id'],
                // 'detail_biaya_id' => $validated['detail_biaya_id'],
            ]);
            return redirect()
                    ->route('dokumen_penjualan.index')
                    ->with('success', 'Berhasil Menambahkan Quotation.');
        } catch (QueryException $e) {
            return redirect()
                    ->route('dokumen_penjualan.index')
                    ->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quotation = Quotation::findOrFail($id);
        $quotation->delete();
        return redirect()
                    ->route('dokumen_penjualan.index')
                    ->with('success', 'Berhasil Menghapus Quotation.');

        // dd($quotation);
        // $salesContract = SalesContract::findOrFail($quotation->sales_contract->id);
    }

    public function showQuotation($id)
    {
        // echo 'test';
        $quotation = Quotation::with('buyer', 'calculation.products')->findOrFail($id);
        $total_harga = $quotation->calculation->harga_jual / $quotation->exchange_rate;
        $unit_price = $quotation->calculation->unit_price / $quotation->exchange_rate;
        return view('dokumen.quotation', compact('quotation', 'total_harga', 'unit_price'));
    }

    public function generateSC($quotationId)
    {
        $quotation = Quotation::findOrFail($quotationId);

        // Cek apakah quotation sudah punya sales contract
        if ($quotation->salesContract) {
            return redirect()->route(
                'sales-contract.show',
                $quotation->salesContract->id
            );
        }

        $nomorContract = 'SC-' . date('Ymd') . '-' . strtoupper(Str::random(5));

        $salesContract = SalesContract::create([
            'nomor_contract' => $nomorContract,
            'quotation_id' => $quotation->id,
            'tanggal' => now(),
        ]);

        return redirect()->route(
            'sales-contract.show',
            $salesContract->id
        );
    }

    public function showSC($id) {
        $salesContract = SalesContract::findOrFail($id);
        return view('dokumen.sales_contract', compact('salesContract'));
    }
}
