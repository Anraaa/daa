<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run(): void 
    {
        // Ensure roles exist
        $adminRole = Role::firstOrCreate(['name' => 'super_admin', 'guard_name' => 'web']);
        
        // Assign roles to specific users based on email
        $adminUser = User::where('email', 'admin@example.com')->first();

        if ($adminUser) {
            $adminUser->assignRole($adminRole);
        }
    }
}