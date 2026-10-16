<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail_biaya extends Model
{
    protected $fillable = ['jumlah_biaya', 'biaya_id'];

    public function export_cost_calculation() : BelongsTo 
    {
        return $this->belongsTo(Export_cost_calculation::class);
    }

    public function biaya() : BelongsTo 
    {
        return $this->belongsTo(Biaya::class);
    }
}
