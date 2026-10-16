<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biaya extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama_biaya', 'jenis_biaya', 'nilai_biaya'];

    public function details()
    {
        return $this->hasMany(Detail_biaya::class);
    }
}
