<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Models\Berita;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Alycia Monica",
        "NIM" => "13242520037",
        "prodi" => "Teknologi Informasi",
        "gambar" => "lily.jpg"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak",
      ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita']);



///routing untuk handling 1 berita
Route::get('berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);
