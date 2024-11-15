<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'stok',
        'harga_satuan',
        'kode_barang',
        'keterangan',
        'kategori',
        'ukuran',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class); // Menyatakan bahwa barang dimiliki oleh user
    }
}
