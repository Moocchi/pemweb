<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kunjungan;

class KunjunganSeeder extends Seeder
{
    public function run(): void
    {
        Kunjungan::create([
            'pasien_id' => 1,
            'Nama Pasien' => 'Rina Dewi',
            'tanggal' => now(),
            'keluhan' => 'Demam dan sakit kepala sejak dua hari',
            'tindakan' => 'Pemeriksaan fisik, pemberian obat penurun panas',
        ]);
    }
}

