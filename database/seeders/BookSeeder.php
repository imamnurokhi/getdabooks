<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('bookorder')->insert([
            'email' => $faker->email,
            'order_date' => now(),
            'pickup_date' => "2022-10-11 10:00:00"
        ]);
    }
}
