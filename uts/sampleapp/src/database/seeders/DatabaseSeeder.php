<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([RoleSeeder::class]); 
        $this->seedUsers(); 
        $this->call([PermissionsSeeder::class]); 
        $this->call([BarangSeeder::class]); 
    }

    private function seedUsers(): void
    {
        // Create Admin user if not exists
        $adminEmail = 'admin@admin.com';
        $adminUser = User::firstOrCreate(
            ['email' => $adminEmail],
            [
                'name' => 'Admin',
                'password' => bcrypt('password'),
            ]
        );
        $adminUser->assignRole('super_admin'); // Assign role admin

        // Create Kepala Gudang user if not exists
        $kepalaGudangEmail = 'kepala@gudang.com';
        $kepalaGudangUser = User::firstOrCreate(
            ['email' => $kepalaGudangEmail],
            [
                'name' => 'Kepala Gudang',
                'password' => bcrypt('password'),
            ]
        );
        $kepalaGudangUser->assignRole('kepala_gudang'); // Assign role kepala gudang

        // Create Supervisor user if not exists
        $supervisorEmail = 'supervisor@admin.com';
        $supervisorUser = User::firstOrCreate(
            ['email' => $supervisorEmail],
            [
                'name' => 'Supervisor',
                'password' => bcrypt('password'),
            ]
        );
        $supervisorUser->assignRole('supervisor'); // Assign role supervisor
    }
}
