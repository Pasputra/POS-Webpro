<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

             for ($i = 0; $i < 100; $i++)
                 \App\Models\Order::create([
                    'invoice' => $faker->unique()->randomnumber(8),
                    'customer_id' => $faker->numberBetween(1,100),
                    'user_id' => $faker->numberBetween(1,3),
                    'total' => '0'.$faker->randomnumber(8),
                ]);
    }
}
