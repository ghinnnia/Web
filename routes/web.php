<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PrinterController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UploadDataController;
use App\Http\Controllers\AccessoriesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangDetailController;

// Route untuk halaman utama
Route::get('/', function () {
    return view('tampilan.index');
});

Route::get('/halaman-pertama', function () {
    $data = "data"; // Menyimpan data
    return redirect()->route('printer')->with('data', $data); // Mengirimkan data ke route kedua
});


// Route untuk halaman register
Route::get('/register', function () {
    return view('register');
});
// Route untuk halaman login
// Route::get('/login', function () {
//     return view('login');
// });
// route untuk halaman daftar laptop
Route::get('/daftarlaptops', [LaptopController::class, 'index'])->name('daftarlaptops');

Route::get('/laptops/{id}', [LaptopController::class, 'show'])->name('laptops.show');

//route controller register
Route::get('/regist',[registerController::class,'store'])->name('register.store');

//input data
Route::middleware(['guest'])->group(function () {
    Route::post('/register', [registerController::class, 'store'])->name('register.store');
});

Route::get('/index', function () {
    return view('tampilan.index');
});


Route::get('/register', [registerController::class, 'index'])->name('register.index');
Route::post('/register', [registerController::class, 'store'])->name('register.store');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/checkout', [CheckoutController::class, 'checkout']);

Route::get('/printer', [PrinterController::class, 'show'])->name('printer.show');
//route database 
Route::get('/UploadPage', [UploadDataController::class, 'index']);
Route::post('/UploadData', [UploadDataController::class, 'store']);
Route::get('/', [ShowController::class, 'show']);

Route::get('/UploadData', [UploadDataController::class, 'show'])->name('uploadpage.index');

Route::get('/accessories', [AccessoriesController::class, 'index'])->name('accessories');

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Route dashboard admin
Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Route dashboard user
Route::middleware(['auth', 'isUser'])->group(function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('login.process');
Route::post('/login', [AuthController::class, 'Login'])->name('login');
// Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Dashboard user
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
});
Route::prefix('admin')->middleware('auth', 'CheckAdmin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// });
Route::get('/search',[BarangController::class,'search'])->name('search');


// ... (route lainnya)

// Rute untuk halaman deskripsi produk
Route::get('/product/{id}', [BarangDetailController::class, 'show'])->name('product.show');
