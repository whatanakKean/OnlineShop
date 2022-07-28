<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'password' => "12345",
                'email' => $faker->word().'@example.com',
                'tel' => $faker->phoneNumber,
            ]);
        }
    }
}
