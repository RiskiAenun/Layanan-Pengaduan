<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Petugas::create([
        'nama_petugas' => 'Administrator',
        'username' => 'admin',
        'password' => Hash::make('password'),
        'tlp' => '085225678905',
        'level'=> 'admin',
        ]);
    }
}
