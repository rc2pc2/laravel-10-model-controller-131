<?php

namespace Database\Seeders;

use App\Models\Actor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 400; $i++) {
            $newActor = new Actor();
            $newActor->first_name = $faker->firstName();
            $newActor->middle_name = $faker->firstName();
            $newActor->last_name = $faker->unique()->lastName();
            $newActor->picture_url = $faker->imageUrl(400,250);
            $newActor->bio = $faker->realTextBetween(300, 700);
            $newActor->date_of_birth = $faker->dateTimeBetween("-90 years", "-18 years");
            $newActor->nationality = $faker->country();
            $newActor->save();
        }
    }
}
