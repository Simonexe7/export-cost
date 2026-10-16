<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama_product', 'grade', 'satuan'];

    public function calculation() : HasMany
    {
        return $this->hasMany(Export_cost_calculation::class, 'export_cost_calculation_id');
    }
}
