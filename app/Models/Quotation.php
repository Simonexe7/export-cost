<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Quotation extends Model
{
    protected $fillable = ['nomor_quotation', 'tanggal', 'buyer_id', 'export_cost_calculation_id', 'valid_until', 'currency', 'exchange_rate', 'incoterm', 'pol', 'destination', 'payment_term', 'delivery_time', 'terms_conditions'];

    public function calculation() : BelongsTo 
    {
        return $this->belongsTo(Export_cost_calculation::class, 'export_cost_calculation_id');
    }

    public function buyer() : BelongsTo
    {
        return $this->belongsTo(Buyer::class, 'buyer_id');
    }

    public function salesContract()
    {
        return $this->hasOne(SalesContract::class);
    }

    // public function sales_contract() : HasOne
    // {
    //     return $this->hasOne(sales_contract::class);
    // }
}
