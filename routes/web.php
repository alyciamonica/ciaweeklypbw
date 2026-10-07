<?php

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

Route::get('/berita', function () {

    return view('berita', [
        "title" => "Berita",
        "beritas" => Berita::ambildata(),
      ]);
});

///routing untuk handling 1 berita
Route::get('berita/{slug}', function ($slug) {

$data_berita = [
    [
         "judul" => "MBG Mas Burhan",
         "slug" => "mbg-mas-burhan-gunawan",
         "penulis" => "Burhan",
         "konten" => " Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    ],
    [
        "judul" =>"Indonesia Juara Asean",
        "slug" => "indonesia-juara-asean",
        "penulis" => "Amin",
        "konten" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"

    ]
];
    
        
    $singlenews = [];
    foreach ($data_berita as $berita) {
        if ($berita ['slug'] === $slug) {
            $singlenews = $berita;
            break;
        }
    }

    return view ('beritatunggal', [
        "title" => "judul berita tunggal",
        "singlenews" => $singlenews
    ]);
});

