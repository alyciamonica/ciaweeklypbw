<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita",
      ]);
});