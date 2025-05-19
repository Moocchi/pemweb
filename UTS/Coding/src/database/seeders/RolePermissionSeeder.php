<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Dokter (role_id 2)
        $dokterPermissions = Permission::whereIn('name', [
            'view_pasien', 'view_any_pasien', 'create_pasien', 'update_pasien',
            'view_kunjungan', 'view_any_kunjungan', 'create_kunjungan', 'update_kunjungan', 'delete_kunjungan', 'delete_any_kunjungan',
            'view_riwayat::medis', 'view_any_riwayat::medis', 'create_riwayat::medis', 'update_riwayat::medis', 'delete_riwayat::medis', 'delete_any_riwayat::medis',
        ])->get();

        $dokterRole = Role::find(2);
        $dokterRole->syncPermissions($dokterPermissions);

        // Petugas (role_id 3)
        $petugasPermissions = Permission::whereIn('name', [
            'view_pasien', 'view_any_pasien', 'create_pasien', 'update_pasien','delete_any_pasien',
            'view_kunjungan', 'view_any_kunjungan', 'create_kunjungan', 'update_kunjungan', 'delete_kunjungan', 'delete_any_kunjungan',
        ])->get();

        $petugasRole = Role::find(3);
        $petugasRole->syncPermissions($petugasPermissions);
    }
}
