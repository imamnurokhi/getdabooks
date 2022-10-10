<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        DB::table('orders')->insert([
            'email' => $faker->email,
            'book_id' => "/works/OL5799453W",
            'book_title' => "Ultimate Spider-Man",
            'pickup_date' => "2022-10-12 10:00:00"
        ]);
        DB::table('orders')->insert([
            'email' => $faker->email,
            'book_id' => "/works/OL14933414W",
            'book_title' => "The Fellowship of the Ring",
            'pickup_date' => "2022-10-11 11:30:00"
        ]);
    }
}
