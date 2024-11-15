<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create permissions if they don't exist
        $permissions = [
            // Permissions untuk Kepala Gudang
            'create_barang',
            'update_barang',
            'delete_barang',
            'view_barang',
            'view_any_barang',

            // Permissions untuk Supervisor
            'view_barang',
            'view_any_barang',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Get or create the 'kepala_gudang' role and assign permissions
        $kepalaGudangRole = Role::firstOrCreate(['name' => 'kepala_gudang']);
        $kepalaGudangRole->givePermissionTo([
            'create_barang',
            'update_barang',
            'delete_barang',
            'view_barang',
            'view_any_barang',
        ]);

        // Get or create the 'supervisor' role and assign permissions
        $supervisorRole = Role::firstOrCreate(['name' => 'supervisor']);
        $supervisorRole->givePermissionTo([
            'view_barang',
            'view_any_barang',
        ]);
    }
}
