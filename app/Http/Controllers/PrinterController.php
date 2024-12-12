<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrinterController extends Controller
{
    // Pastikan method 'show' ini ada
    public function show()
    {
        return view('printer');  // Menampilkan halaman printer.blade.php
    }
}