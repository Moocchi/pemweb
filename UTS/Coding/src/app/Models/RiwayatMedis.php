<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RiwayatMedis extends Model
{
    protected $table = 'riwayat_medis';
    protected $fillable = [
        'kunjungan_id',
        'diagnosa',
        'resep',
        'saran'
    ];
}
