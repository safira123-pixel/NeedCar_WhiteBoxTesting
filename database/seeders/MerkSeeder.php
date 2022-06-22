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
            'merk_code' => '1',
            'merk_name' => 'Toyota',
            'merk_slug' => '1',
            'merk_description' => 'Toyota Merk',
            'merk_status' => 'active',
            'merk_photo' => 'LogoToyota'

        ]);

        DB::table('merk')->insert([
            'merk_code' => '2',
            'merk_name' => 'Suzuki',
            'merk_slug' => '2',
            'merk_description' => 'Suzuki Merk',
            'merk_status' => 'active',
            'merk_photo' => 'LogoSuzuki'
        ]);

        DB::table('merk')->insert([
            'merk_code' => '3',
            'merk_name' => 'Honda',
            'merk_slug' => '3',
            'merk_description' => 'Honda Merk',
            'merk_status' => 'active',
            'merk_photo' => 'LogoHonda'
        ]);

        DB::table('merk')->insert([
            'merk_code' => '4',
            'merk_name' => 'Mitsubishi',
            'merk_slug' => '4',
            'merk_description' => 'Mitsubishi Merk',
            'merk_status' => 'active',
            'merk_photo' => 'LogoMitsubishi'
        ]);

        DB::table('merk')->insert([
            'merk_code' => '5',
            'merk_name' => 'BMW',
            'merk_slug' => '5',
            'merk_description' => 'BMW Merk',
            'merk_status' => 'active',
            'merk_photo' => 'LogoBMW'
        ]);
    }
}
