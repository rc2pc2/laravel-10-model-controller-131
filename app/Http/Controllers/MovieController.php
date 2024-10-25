<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){

        // # SELECT * FROM `movies`;
        $movies = Movie::all();

        // % SELECT * FROM `movies` WHERE `id` = 1;
        // $movies = Movie::where("id", 1)->get(); // < restituisce una collection di istanze di tipo Movie

        // % SELECT * FROM `movies` WHERE `id` = 1 LIMIT 1;
        // $movies = Movie::where("id", 1)->first(); // < restituisce una istanza di tipo Movie, la prima trovata

        // % SELECT * FROM `movies` WHERE `id` <> 1;
        // $movies = Movie::where("id", "!=", 1)->get();

        // % SELECT * FROM `movies` WHERE `id` <> 1 ORDER BY `vote` DESC LIMIT 3;
        // $movies = Movie::where("id", "!=", 1)->orderBy('vote', 'desc')->limit(3)->get();

        // % SELECT * FROM `movies` WHERE `title` LIKE "e%" ORDER BY `vote` DESC LIMIT 3;
        // $movies = Movie::where("title", "LIKE", "p%")->orderBy('vote', 'desc')->limit(3)->get();

        // dd($movies);

        // > controlla se esiste questo record nel database
        //  < verifica se questo id e' uguale a quello che chiedo
        //  > se lo trovi restituiscimelo
        // < altrimenti manda erroro 404
        // $movie = Movie::findOrFail(1);

        return view("movies.index", compact("movies"));
    }
}
