<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'admin',
            'nik' => '123456',
            'role' => 'pengguna',
            'email' => '123456',
            'password' => bcrypt('123456')
        ]);

        DB::table('perjalanan_models')->insert([
            'id_user' => 1,
            'tanggal' => '2022-2-2',
            'lokasi' => 'Bandung',
            'suhu' => 35
        ]);
        
    }
}
