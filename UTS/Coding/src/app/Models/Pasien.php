<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';
    protected $fillable = [
        'nama',
        'nik',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_hp'
    ];
}
