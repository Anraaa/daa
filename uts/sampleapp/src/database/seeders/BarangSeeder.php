<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mendapatkan user berdasarkan email
        $kepalaGudangUser = User::where('email', 'kepala@gudang.com')->first();
        $adminUser = User::where('email', 'admin@admin.com')->first();

        // Pastikan user ada
        if (!$kepalaGudangUser || !$adminUser) {
            echo "Kepala Gudang atau Admin user tidak ditemukan.";
            return;
        }

        // Membuat data barang dengan user_id dari Kepala Gudang
        Barang::create([
            'nama' => 'T-shirt Casual',
            'stok' => 50,
            'harga_satuan' => 150000,
            'kode_barang' => 'TS001',
            'keterangan' => 'T-shirt dengan desain kasual untuk sehari-hari',
            'kategori' => 'T-shirt',
            'ukuran' => 'M',
            'user_id' => $kepalaGudangUser->id,  // Mengisi user_id dengan Kepala Gudang
        ]);

        // Membuat data barang dengan user_id dari Admin
        Barang::create([
            'nama' => 'T-shirt Formal',
            'stok' => 30,
            'harga_satuan' => 200000,
            'kode_barang' => 'TS002',
            'keterangan' => 'T-shirt dengan desain formal cocok untuk acara semi-formal',
            'kategori' => 'T-shirt',
            'ukuran' => 'L',
            'user_id' => $adminUser->id,  // Mengisi user_id dengan Admin
        ]);

        // Menambahkan barang lainnya
        Barang::create([
            'nama' => 'T-shirt Sporty',
            'stok' => 40,
            'harga_satuan' => 180000,
            'kode_barang' => 'TS003',
            'keterangan' => 'T-shirt dengan bahan yang nyaman untuk olahraga',
            'kategori' => 'T-shirt',
            'ukuran' => 'S',
            'user_id' => $kepalaGudangUser->id,  // Mengisi user_id dengan Kepala Gudang
        ]);
    }
}
