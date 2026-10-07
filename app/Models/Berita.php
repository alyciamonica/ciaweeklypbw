<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class Berita extends Model
{
    private static $data_berita = [
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
}
