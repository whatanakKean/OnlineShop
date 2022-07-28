<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Order::create([
                'user_id' => $faker->numberBetween(1, 10),
                'book_id' => $faker->numberBetween(1, 10),
                'vendor_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
