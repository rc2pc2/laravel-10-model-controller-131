<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // # classe per stabilire l'ordine di esecuzione dei seeder
        $this->call([
            ActorSeeder::class,
            CinemaSeeder::class,
            GenreSeeder::class,
            MovieSeeder::class,
        ]);
    }
}
