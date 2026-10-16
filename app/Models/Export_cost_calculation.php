<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Export_cost_calculation extends Model
{
    protected $fillable = ['nomor_kalkulasi', 'quantity', 'harga_beli', 'total_biaya', 'tanggal', 'margin_persen', 'unit_price', 'harga_jual', 'estimasi_keuntungan', 'supplier_id', 'product_id', 'forwarder_id', 'undername_id'];

    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }

    public function details()
    {
        return $this->hasMany(Detail_biaya::class);
    }

    public function quotations() : HasMany
    {
        return $this->hasMany(Quotation::class);
    }

    public function products() : BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
