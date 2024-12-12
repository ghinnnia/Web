<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Atau definisikan kolom yang bisa diisi jika diperlukan
    protected $fillable = ['product_name', 'category', 'price', 'image'];
}
