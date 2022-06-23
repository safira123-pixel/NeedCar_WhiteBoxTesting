<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //TOYOTA
        DB::table('car')->insert([
            'merk_id' => '1',
            'code' => '1',
            'name' => 'Toyota Agya',
            'desc' => 'Kapasitas tempat duduk: 5
                       Dimensi: 3.660 mm P x 1.600 mm L x 1.520 mm T
                       Kapasitas tangki BBM: 33 l
                       Ukuran velg: 14" diameter, 5" lebar',
            'amount' => 5,
            'price' => 170000000,
            'status' => 'active'
        ]);

        DB::table('car')->insert([
            'merk_id' => '1',
            'code' => '2',
            'name' => 'Toyota Avanza',
            'desc' => 'Kapasitas tempat duduk: 5
                       Dimensi: 4.395 mm P x 1.730 mm L x 1.665-1.700 mm T
                       Kapasitas tangki BBM: 43 l
                       Ukuran velg: 15-16" diameter, 5" lebar',           
            'amount' => 5,
            'price' => 264000000,
            'status' => 'active'
        ]);

        DB::table('car')->insert([
            'merk_id' => '1',
            'code' => '3',
            'name' => 'Toyota Raize',
            'desc' => 'Kapasitas tempat duduk: 5
                       Ukuran velg: 15-16" diameter, 5" lebar
                       Dimensi: 4.030 mm P x 1.710 mm L x 1.635 mm T
                       Kapasitas tangki BBM: 36 l',
            'amount' => 5,
            'price' => 273000000,
            'status' => 'active'
        ]);

        //SUZUKI
        DB::table('car')->insert([
            'merk_id' => '2',
            'code' => '4',
            'name' => 'Suzuki Xpander',
            'desc' => 'Kapasitas tempat duduk: 7
                       Dimensi: 4.395-4.470 mm P x 1.735 mm L x 1.690 mm T
                       Kapasitas tangki BBM: 45 l
                       Mesin: 1,5L 4-silinder',
            'amount' => 5,
            'price' => 253000000,
            'status' => 'active'
        ]);

        DB::table('car')->insert([
            'merk_id' => '2',
            'code' => '5',
            'name' => 'Suzuki Baleno',
            'desc' => 'Kapasitas tempat duduk: 5
                       Dimensi: 3.995 mm P x 1.745 mm L x 1.510 mm T
                       Ukuran velg: 16" diameter, 5,5" lebar
                       Kapasitas tangki BBM: 37 l',
            'amount' => 5,
            'price' => 247000000,
            'status' => 'active'
        ]);

        DB::table('car')->insert([
            'merk_id' => '2',
            'code' => '6',
            'name' => 'Suzuki APV-Arena',
            'desc' => 'Kapasitas tempat duduk: 5
                       Dimensi: 4.395 mm P x 1.730 mm L x 1.665-1.700 mm T
                       Kapasitas tangki BBM: 43 l
                       Ukuran velg: 15-16" diameter, 5" lebar',
            'amount' => 5,
            'price' => 215000000,
            'status' => 'active'
        ]);

        //HONDA
        DB::table('car')->insert([
            'merk_id' => '3',
            'code' => '7',
            'name' => 'Honda Brio',
            'desc' => 'Kapasitas tempat duduk: 5
                       Dimensi: 4.395 mm P x 1.730 mm L x 1.665-1.700 mm T
                       Kapasitas tangki BBM: 43 l
                       Ukuran velg: 15-16" diameter, 5" lebar',
            'amount' => 5,
            'price' => 215000000,
            'status' => 'active'
        ]);

        DB::table('car')->insert([
            'merk_id' => '3',
            'code' => '8',
            'name' => 'Honda BR-V',
            'desc' => 'Kapasitas tempat duduk: 5
                       Dimensi: 4.395 mm P x 1.730 mm L x 1.665-1.700 mm T
                       Kapasitas tangki BBM: 43 l
                       Ukuran velg: 15-16" diameter, 5" lebar',
            'amount' => 5,
            'price' => 215000000,
            'status' => 'active'
        ]);

        //MITSUBISHI
        DB::table('car')->insert([
            'merk_id' => '4',
            'code' => '9',
            'name' => 'Mitsubishi XPander',
            'desc' => 'Mesin: 1,5L 4-silinder
                       Jumlah pintu: 5
                       Sistem penggerak roda: Penggerak roda depan
                       Kapasitas tangki bahan bakar: 45 l
                       Dimensi: 4.595 mm P x 1.750 mm L x 1.730 mm T
                       Transmisi: 5-kecepatan manual',
            'amount' => 5,
            'price' => 339000000,
            'status' => 'active'
        ]);

        DB::table('car')->insert([
            'merk_id' => '4',
            'code' => '10',
            'name' => 'Mitsubishi Triton',
            'desc' => 'Kapasitas mesin: Diesel 2477 cc
                       Tenaga: Diesel 178 hp
                       Kapasitas Tempat Duduk: Diesel 5 Kursi
                       Jenis Transmisi: Diesel Otomatis',
            'amount' => 5,
            'price' => 492000000,
            'status' => 'active'
        ]);

        //BMW
        DB::table('car')->insert([
            'merk_id' => '5',
            'code' => '11',
            'name' => 'BMW X1',
            'desc' => 'Dimensi: 4.439 mm P x 1.821 mm L x 1.612 mm T
                       Efisiensi bahan bakar: 14 l/100km gabungan
                       Kapasitas tangki BBM: 51 l
                       Daya kuda: 140 HP',
            'amount' => 5,
            'price' => 737000000,
            'status' => 'active'
        ]);

        DB::table('car')->insert([
            'merk_id' => '5',
            'code' => '12',
            'name' => 'BMW x2',
            'desc' => 'Dimensi: 4.360 mm P x 1.824 mm L x 1.526 mm T
                       Berat kosong: 1.535 kg
                       Mesin: 1,5L 3-silinder
                       Volume kargo: 470 l
                       Kapasitas tangki BBM: 51 l',
            'amount' => 5,
            'price' => 739000000,
            'status' => 'active'
        ]);

    }
}
