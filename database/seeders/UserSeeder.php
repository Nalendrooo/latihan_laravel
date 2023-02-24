<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pak Guru',
            'role' => 'admin',
            'email' => 'admin@sma404.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Andi Saputra',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'andi@sma404.com',
            'password' => bcrypt('password123')
        ]);
        DB::table('users')->insert([
            'name' => 'Nalendro Adil',
            'role' => 'siswa',
            'siswa_id' => 1,
            'email' => 'nalendro@sma404.com',
            'password' => bcrypt('password123')
        ]);
    }
}
