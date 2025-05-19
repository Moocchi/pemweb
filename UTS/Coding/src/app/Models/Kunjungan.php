<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungans';    
    protected $fillable = [
        'pasien_id',
        'Nama Pasien',
        'tanggal',
        'keluhan',
        'tindakan'
    ];
}
