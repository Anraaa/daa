<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Ensure roles exist
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        $kepalaGudangRole = Role::firstOrCreate(['name' => 'kepala_gudang', 'guard_name' => 'web']);
        $supervisorRole = Role::firstOrCreate(['name' => 'supervisor', 'guard_name' => 'web']);
        
        // Assign roles to specific users based on email
        $adminUser = User::where('email', 'admin@admin.com')->first();
        $kepalaGudangUser = User::where('email', 'kepala@gudang.com')->first();
        $supervisorUser = User::where('email', 'supervisor@admin.com')->first();

        // Assign roles if users exist
        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }

        if ($kepalaGudangUser) {
            $kepalaGudangUser->assignRole($kepalaGudangRole);
        }

        if ($supervisorUser) {
            $supervisorUser->assignRole($supervisorRole);
        }
    }
}
