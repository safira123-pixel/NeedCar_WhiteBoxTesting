<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer')->insert([
            'name' => 'dherisma',
            'email' => 'dherisma@gmail.com',
            'phone' => '087657456432',
            'address' => 'JL. Lowokwaru No 90 Malang',
        ]);
    }
}
