<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Adjust fields as necessary

    // Define the inverse relationship: a category has many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
