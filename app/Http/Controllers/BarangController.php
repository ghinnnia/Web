<?php

namespace App\Http\Controllers;

use App\Models\Barang; // Ganti dengan nama model Anda
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('q'); // Mendapatkan input dari form pencarian

        $barangs = Barang::where('nama', 'like', "%{$searchTerm}%")
                        ->orWhere('jenis', 'like', "%{$searchTerm}%")
                        ->orWhere('aksesoris', 'like', "%{$searchTerm}%")
                        ->orWhere('laptops', 'like', "%{$searchTerm}%")
                        ->orWhere('printer', 'like', "%{$searchTerm}%")

                        ->get();

        return response()->json($barangs); // Mengembalikan data sebagai JSON
    }
}