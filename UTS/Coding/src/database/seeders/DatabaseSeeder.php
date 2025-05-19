<?php

namespace Database\Seeders;

use App\Models\Pasien;
use App\Models\User;
use Database\Seeders\RolePermissionSeeder;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (User::count() == 0) {
            // Ensure roles exist
            Role::firstOrCreate(['name' => 'super_admin']);
            Role::firstOrCreate(['name' => 'dokter']);
            Role::firstOrCreate(['name' => 'petugas']);

            $superAdmin = User::factory()->create([
                'name' => 'Super Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
            $superAdmin->assignRole('super_admin');

            $dokter = \App\Models\User::factory()->create([
                'name' => 'Dokter',
                'email' => 'dokter@klinik.com',
                'password' => bcrypt('password'),
            ]);
            $dokter->assignRole('dokter');

            $petugas = \App\Models\User::factory()->create([
                'name' => 'Petugas',
                'email' => 'petugas@klinik.test',
                'password' => bcrypt('password'),
            ]);
            $petugas->assignRole('petugas');
        }

        $this->call([
            PasienSeeder::class,
            KunjunganSeeder::class,
            RiwayatMedisSeeder::class,
            RolePermissionSeeder::class,
        ]);
    }
}