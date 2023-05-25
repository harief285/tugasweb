<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mhsController;
use App\Http\Controllers\prodiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
//     echo "<a href='".route('home')."'>HOME</a> <a href='".route('mhs')."'>Mahasiswa</a>
//     <a href='".route('prodi')."'>Prodi</a><br>
//     <h1> Page > Home</h1>";
// })->name('home');

// Route::get('/mhs', [mhsController::class, 'index'])->name('mhs');
// Route::get('/prodi', [prodiController::class, 'index'])->name('prodi');
// Route::get('/mhs/show', [mhsController::class, 'show'])->name('mhs-show');
// Route::get('/mhs/perulangan', [mhsController::class, 'perulangan'])->name('mhs-perulangan');

Route::get('/', function(){
    $title="websaya.com";
    $slug="home";
    $konten="Ini adalah konten websyaa.com";
    return view('konten.home', compact('title', 'slug', 'konten')); 
});

Route::get('/home', function(){
    $title="websaya.com";
    $slug="home";
    $konten="Ini adalah konten websyaa.com";
    return view('konten.home', compact('title', 'slug', 'konten')); 
});

Route::get('/mhs', function(){
    $mhs= ['Adeeva','Nadia','Zahra','Adelia','Nahida'];
    $title="websaya.com";
    $slug="mhs";
    $konten="Ini adalah konten websyaa.com";
    return view('konten.mhs', compact('title', 'slug', 'mhs')); 
});

Route::get('/prodi', [prodiController::class, 'index']);