<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->callSeeders();
        $this->seedUsers();
    }

    private function callSeeders(): void
    {
        $this->call([
            RoleSeeder::class, // RoleSeeder akan membuat role yang dibutuhkan
            ProductSeeder::class,
            OrderSeeder::class,
        ]);
    }

    private function seedUsers(): void
    {
        // Membuat user Admin jika belum ada
        if (!User::where('email', 'admin@admin.com')->exists()) {
            $admin = User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ]);
            $admin->assignRole('super_admin');
        }

        // Membuat user Pembeli jika belum ada
        if (!User::where('email', 'pbl@admin.com')->exists()) {
            $buyer = User::create([
                'name' => 'Pembeli',
                'email' => 'pbl@admin.com',
                'password' => bcrypt('password'),
            ]);
            $buyer->assignRole('Pembeli');
        }
    }
}
