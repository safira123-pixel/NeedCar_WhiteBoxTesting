<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '081370587320',
            'address' => 'Jl. Simpang Pisang Kipas, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'phone' => '081370587320',
            'address' => 'Jl. Simpang Pisang Kipas, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141',
            'password' => Hash::make('useruser'),
            'role' => 'user',
        ]);
    }
}
