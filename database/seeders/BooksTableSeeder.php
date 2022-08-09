<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Book::create([
                'name' => $faker->name(),
                'vendor_id' => $faker->numberBetween(1, 10),
                'price' => $faker->randomFloat(2, 1, 100),
                'category' => $faker->word,
                'author' => $faker->name,
                'description' => $faker->name(),
                'release_date' => $faker->dateTime,
                'img' => $faker->word,
                'price' => $faker->randomFloat(2, 1, 100),
                'quantity' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
