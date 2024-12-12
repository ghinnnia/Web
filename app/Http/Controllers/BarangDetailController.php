<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Sesuaikan nama model jika berbeda

class BarangDetailController extends Controller
{
    public function show($id)
    {
        // Cari data produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Tampilkan halaman detail produk menggunakan file deskripsi_barang.blade.php
        return view('products.deskripsi_barang', compact('product'));
    }
}

