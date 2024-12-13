<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Kategori;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Kategori::all();

$adidasCategory = $categories->firstWhere('name', 'Sepatu');
$nikeCategory = $categories->firstWhere('name', 'Sepatu');
$levisCategory = $categories->firstWhere('name', 'Celana');
$uniqloCategory = $categories->firstWhere('name', 'Baju');

// Check if categories exist
if ($adidasCategory && $nikeCategory && $levisCategory && $uniqloCategory) {
    Product::insert([
        [
            'name' => 'Adidas',
            'price' => 1000,
            'kategoris_id' => $adidasCategory->id,

        ],
        [
            'name' => 'Nike',
            'price' => 999,
            'kategoris_id' => $nikeCategory->id,

        ],
        [
            'name' => 'Levis',
            'price' => 500,
            'kategoris_id' => $levisCategory->id,

        ],
        [
            'name' => 'Uniqlo',
            'price' => 100,
            'category_id' => $uniqloCategory->id,

        ],
    ]);
} else {
    // Handle the case where one or more categories do not exist
    \Log::warning("One or more categories not found.");
}
    }
}
