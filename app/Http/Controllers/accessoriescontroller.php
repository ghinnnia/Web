<?php
namespace App\Http\Controllers;

use App\Models\accessories;
use App\Models\Accessory;

class AccessoriesController extends Controller
{
    public function index()
    {
        $accessories = accessories::all();  // Ambil semua data aksesori
        return view('accessories', compact('accessories'));
    }
}
