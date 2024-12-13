<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kategori::insert([
            [
                'name' => 'Sepatu',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Celana',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Baju',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
