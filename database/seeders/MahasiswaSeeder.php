<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'nama' => 'cia',
                'nim' => '13242520037',
                'prodi' => 'Informatika',
                'email' => 'cia@example.com',
                'nohp' => '08123456789',
                'foto' => 'foto_cia.jpg'
            ],
            [
                'nama' => 'lily',
                'nim' => '13242520038',
                'prodi' => 'Sistem Informasi',
                'email' => 'lily@example.com',
                'nohp' => '08123456780',
                'foto' => 'foto_lily.jpg'
            ],
            [
                'nama' => 'monica',
                'nim' => '13242520039',
                'prodi' => 'Teknologi Informasi',
                'email' => 'monica@example.com',
                'nohp' => '08123456781',
                'foto' => 'foto_monica.jpg'
            ],
        ]);
    }
}