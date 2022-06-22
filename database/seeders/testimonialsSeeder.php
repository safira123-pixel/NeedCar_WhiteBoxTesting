<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class testimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'Salsabila Natasya',
            'email' => 'SalsabilaNat@gmail.com',
            'car_name' => 'Mitsubisi Xpander',
            'review' => 'Renting with affordable price in here, its so good',

        ]);

        DB::table('testimonials')->insert([
            'name' => 'Bramano Aditya',
            'email' => 'BramaKun@gmail.com',
            'car_name' => 'Honda Brio',
            'review' => 'Nice and comfy car',

        ]);

        DB::table('testimonials')->insert([
            'name' => 'safira Istifarini',
            'email' => 'SafiraIstifarini@gmail.com',
            'car_name' => 'Honda Civic',
            'review' => 'Renting car with nice experience',

        ]);
    }
}
