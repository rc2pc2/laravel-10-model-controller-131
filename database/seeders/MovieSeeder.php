<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; // # importo la libreria per generare dati "mock"

class MovieSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // for ($i=0; $i < 1000; $i++) {
        //     $newMovie = new Movie();
        //     $newMovie->title = $faker->word();
        //     $newMovie->date = $faker->dateTimeThisDecade();
        //     $newMovie->nationality = $faker->country();
        //     $newMovie->original_title = $faker->word();
        //     $newMovie->vote = $faker->numberBetween(0, 10);
        //     $newMovie->save();
        // }


        $movies = [
            [
                "title" => "Il Signore Degli Anelli: Il Ritorno del Re",
                "date" => "2003-01-22",
                "nationality" => "American",
                "original_title" => "Lord of the Rings: The Return of the King",
                "vote" => 10.0,
            ],
            [
                "title" => "Il Signore Degli Anelli: Le due Torri",
                "date" => "2002-01-22",
                "nationality" => "American",
                "original_title" => "Lord of the Rings: The Two Towers",
                "vote" => 9.9,
            ],
        ];

        for ($i=0; $i < 10; $i++) {
            foreach ($movies as $movie) {
                // % inserire dati a mano
                // $newMovie = new Movie();
                // $newMovie->title = $movie["title"];
                // $newMovie->date = $movie["date"];
                // $newMovie->nationality = $movie["nationality"];
                // $newMovie->original_title = $movie["original_title"];
                // $newMovie->vote = $movie["vote"];
                // $newMovie->save();

                $newMovie = Movie::create($movie);
            }
        }
    }
}
