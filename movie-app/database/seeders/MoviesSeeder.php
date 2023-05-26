<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul' => 'Train to Busan',
            'poster' => 'image.png',
            'genre_id' => '1',
            'negara' => 'Korea',
            'tahun' => 1994,
            'rating' => 9.0,
        ]);

        Movie::create([
            'judul' => 'Mariposa',
            'poster' => 'image.png',
            'genre_id' => '2',
            'negara' => 'Indonesia',
            'tahun' => 2020,
            'rating' => 8.5,
        ]);

        Movie::create([
            'judul' => 'Orang Kaya Baru',
            'poster' => 'image.png',
            'genre_id' => '3',
            'negara' => 'Indonesia',
            'tahun' => 2021,
            'rating' => 9.5,
        ]);

        Movie::create([
            'judul' => 'Antares',
            'poster' => 'image.png',
            'genre_id' => '4',
            'negara' => 'Indonesia',
            'tahun' => 2020,
            'rating' => 8.9,
        ]);

        Movie::create([
            'judul' => 'Danur',
            'poster' => 'image.png',
            'genre_id' => '5',
            'negara' => 'Indonesia',
            'tahun' => 2015,
            'rating' => 9.2,
        ]);
    }
}
