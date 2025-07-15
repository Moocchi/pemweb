<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // $user = User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        // ]);

        // $user->assignRole('super_admin');

        // $user = User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'hrd@admin.com',
        // ]);

        // $user->assignRole('hrd');

        // $user = User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'instructor@admin.com',
        // ]);

        // $user->assignRole('instructor');

        // $user = User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'student@admin.com',
        // ]);

        // $user->assignRole('student');

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            TestSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
