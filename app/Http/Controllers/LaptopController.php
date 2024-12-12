<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    // Menampilkan daftar laptop
    public function index()
    {
        $laptops = Laptop::all();  // Ambil semua data laptop dari database
        return view('tampilan.daftarlaptops', compact('laptops'));
    }

    // Menampilkan detail laptop berdasarkan ID
    public function show($id)
{
    $laptop = Laptop::findOrFail($id); // Mendapatkan laptop berdasarkan ID
    return response()->json([
        'name' => $laptop->name,
        'description' => $laptop->description, // Pastikan kolom description ada di database
        'specifications' => $laptop->specifications, // Pastikan kolom specifications ada di database
        'image' => $laptop->image // Gambar laptop jika diperlukan
    ]);
}
}

