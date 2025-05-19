<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    public function run(): void
    {
        Pasien::create([
            'nama' => 'Rina Dewi',
            'nik' => '3201010101010001',
            'tanggal_lahir' => '1995-05-10',
            'jenis_kelamin' => 'P',
            'alamat' => 'Jl. Mawar No. 123, Bojong Gede',
            'no_hp' => '081234567890',
        ]);
    }
}

