<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undername extends Model
{
    use HasFactory;
    
    protected $fillable = ['nama_perusahaan', 'nomor_izin_ekspor', 'alamat', 'telepon', 'email', 'fee'];
}
