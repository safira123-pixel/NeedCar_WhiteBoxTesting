<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MerkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Name Merk : 'Toyota','Suzuki','Honda','BMW','Mitsubishi'
     * @return void
     */
    public function run()
    {
        DB::table('merk')->insert([
            'code' => '1',
            'name' => 'Toyota'
        ]);

        DB::table('merk')->insert([
            'code' => '2',
            'name' => 'Suzuki'
        ]);

        DB::table('merk')->insert([
            'code' => '3',
            'name' => 'Honda'
        ]);

        DB::table('merk')->insert([
            'code' => '4',
            'name' => 'Mitsubishi'
        ]);

        DB::table('merk')->insert([
            'code' => '5',
            'name' => 'BMW'
        ]);
    }
}
