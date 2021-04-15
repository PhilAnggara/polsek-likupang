<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kendaraan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kendaraan';

    protected $fillable = [
        'merk_kendaraan', 'no_polisi', 'warna', 'jenis', 'penanggung_jawab', 'no_telp'
    ];


    protected $hidden = [
        
    ];
}
