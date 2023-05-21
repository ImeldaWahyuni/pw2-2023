<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'Train to Busan',
            'poster' => 'image.png',
            'genre' => 'Thriller',
            'negara' => 'Korea',
            'tahun' => 1994,
            'rating' => 9.0,
        ],
        [
            'no' => 2,
            'judul' => 'Mariposa',
            'poster' => 'image.png',
            'genre' => 'Fiksi Remaja',
            'negara' => 'Indonesia',
            'tahun' => 2020,
            'rating' => 8.5,
        ],
        [
            'no' => 3,
            'judul' => 'Waktu Magrib',
            'poster' => 'image.png',
            'genre' => 'Horor',
            'negara' => 'Indonesia',
            'tahun' => 2021,
            'rating' => 9.5,
        ],
        [
            'no' => 4,
            'judul' => 'Antares',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Indonesia',
            'tahun' => 2020,
            'rating' => 8.9,
        ],
        [
            'no' => 5,
            'judul' => 'Danur',
            'poster' => 'image.png',
            'genre' => 'Horor',
            'negara' => 'Indonesia',
            'tahun' => 2015,
            'rating' => 9.2,
        ],
    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
