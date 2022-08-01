<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vendor::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Vendor::create([
                'name' => $faker->name,
                'img' => $faker->imageUrl(640, 480, 'cats'),
                'tel' => $faker->phoneNumber,
                'address' => $faker->address,
                'email' => $faker->email,
                'user_id' => $faker->numberBetween(1,10),
            ]);
        }
    }
}
