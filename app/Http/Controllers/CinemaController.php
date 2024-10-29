<?php

namespace App\Http\Controllers;

use App\Models\Cinema;
use Illuminate\Http\Request;

class CinemaController extends Controller
{
    //
    public function index(){
        // % recupero tutti i cinema
        $cinemas = Cinema::all();

        // dammi solo quelli che

        // % li restituisco alla pagina di index
        return view("cinemas.index", compact("cinemas"));
    }
}
