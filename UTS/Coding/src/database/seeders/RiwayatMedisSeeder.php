<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RiwayatMedis;

class RiwayatMedisSeeder extends Seeder
{
    public function run(): void
    {
        RiwayatMedis::create([
            'kunjungan_id' => 1,
            'diagnosa' => 'Infeksi saluran pernapasan atas (ISPA)',
            'resep' => 'Paracetamol 500mg, Amoxicillin 500mg',
            'saran' => 'Istirahat cukup, banyak minum air putih, kontrol ulang 3 hari',
        ]);
    }
}
