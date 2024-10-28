<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            "Action",
            "Adventure",
            "Documentary",
            "Horror",
            "Thriller",
            "Crime",
            "Mystery",
            "Fantasy",
            "Comedy",
            "Drama",
            "Sci-fi"
        ];

        foreach ($genres as $genreName) {
            // % inserisco i dati manualmente
            $newGenre = new Genre();
            $newGenre->name = $genreName;
            $newGenre->save();

            // # inserisco i dati usando le fillable properties
            // Genre::create([
            //     "name" => $genreName
            // ]);
        }

    }
}
