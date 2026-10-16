<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalesContract extends Model
{
    protected $fillable = ['nomor_contract', 'quotation_id', 'tanggal'];
    public function quotation()
    {
        return $this->belongsTo(Quotation::class);
    }
}
