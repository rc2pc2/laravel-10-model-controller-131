<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, "home"])->name('home');
Route::get('/movies', [MovieController::class, "index"])->name('movies.index');
Route::get('/actors', [ActorController::class, "index"])->name('actors.index');
Route::get('/genres', [GenreController::class, "index"])->name('genres.index');
Route::get('/cinemas', [CinemaController::class, "index"])->name('cinemas.index');
