<?php

namespace Database\Seeders;

use App\Models\Cinema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 200; $i++) {
            $newCinema = new Cinema();
            $newCinema->name = $faker->name();
            $newCinema->address = $faker->streetAddress();
            $newCinema->city = $faker->city();
            $newCinema->country = $faker->country();
            $newCinema->rooms_number = $faker->numberBetween(1, 25);
            $newCinema->capacity = $faker->numberBetween(150, 3500);
            $newCinema->save();
        }
    }
}
