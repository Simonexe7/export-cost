<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buyer extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama_buyer', 'negara', 'alamat', 'telepon', 'email'];

    public function quotations() : HasMany
    {
        return $this->hasMany(Quotation::class);
    }
}
