<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker; // # importo la libreria per generare dati "mock"
use App\Helpers\FileHelper;

class MovieSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        // % inserire dati a mano
        // $newMovie = new Movie();
        // $newMovie->title = $movie["title"];
        // $newMovie->date = $movie["date"];
        // $newMovie->lead_studio = $movie["lead_studio"];
        // $newMovie->nationality = $movie["nationality"];
        // $newMovie->original_title = $movie["original_title"];
        // $newMovie->vote = $movie["vote"];
        // $newMovie->save();

        // # prendo i dati dal file .csv
        // > per ogni riga presente nel csv ESCLUSA LA ZERESIMA (con indice 0)
            // < interpreto i dati e li trasformo nella tipologia di dato che mi serve per essere inserita
            //  % li inserisco nel mio modello
            //  ! salvo il modello

        $arrayDiDati = FileHelper::getCsv(__DIR__ . "/files/movies.csv");

        foreach ($arrayDiDati as $indice => $riga) {
            if ($indice !== 0){
                $newMovie = new Movie();
                $newMovie->title = $riga[0];
                $newMovie->date = $riga[7] . "-01-01";
                $newMovie->lead_studio = $riga[2];
                $newMovie->nationality = $faker->country();
                $newMovie->original_title = $riga[0];
                $newMovie->vote = $riga[3];
                $newMovie->save();
            }
        }
    }

    // public function getCsv(string $filePath){
    //     $result = [];

    //     // < apro il file in sola lettura 'r', dicendogli dove si trova e lo assegno ad una variabile
    //     $file = fopen($filePath, "r");

    //     if ($file === false ){
    //         exit("Il file non e' disponibile al path inserito, ovvero: ". $filePath);
    //     }

    //     // ! finche' e' presente una riga nel file aperto
    //     while (($row = fgetcsv($file)) !== FALSE) {
    //         // % inseriscila nell'array associativo result
    //         $result[] = $row;
    //     }

    //     // < chiudo il file
    //     fclose($file);

    //     // > un array associativo in cui ogni elementi sara' una riga del nostro csv
    //     return $result;
    // }
}
