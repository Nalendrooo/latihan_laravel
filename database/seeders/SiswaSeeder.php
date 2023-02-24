<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Nalendro',
            'nis' => '12345678',
            'tgl_lahir' => '2003-04-27',
        ]);
        DB::table('siswa')->insert([
            'nama' => 'Satyadi',
            'nis' => '87654321',
            'tgl_lahir' => '2004-03-27',
        ]);
    }
}
