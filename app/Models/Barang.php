<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barangs'; // Nama tabel
    protected $fillable = ['nama', 'jenis', 'merk', 'deskripsi', 'harga', 'gambar']; // Kolom yang dapat diisi
    
}
