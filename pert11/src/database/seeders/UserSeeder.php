<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Super Admin', 'password' => Hash::make('password')]
        );
        $user->assignRole('super_admin');

        $user = User::firstOrCreate(
            ['email' => 'hrd@admin.com'],
            ['name' => 'hrd', 'password' => Hash::make('password')]
        );
        $user->assignRole('hrd');

        $user = User::firstOrCreate(
            ['email' => 'instructor@admin.com'],
            ['name' => 'instructor', 'password' => Hash::make('password')]
        );
        $user->assignRole('instructor');

        $user = User::firstOrCreate(
            ['email' => 'student@admin.com'],
            ['name' => 'student', 'password' => Hash::make('password')]
        );
        $user->assignRole('student');
    }
}
