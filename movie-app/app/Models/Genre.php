<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'judul' => 'Train to Busan',
            'genre' => 'Thriller',
        ],
        [
            'no' => 2,
            'judul' => 'Mariposa',
            'genre' => 'Fiksi Remaja',
        ],
        [
            'no' => 3,
            'judul' => 'Waktu Magrib',
            'genre' => 'Horor',
        ],
        [
            'no' => 4,
            'judul' => 'Antares',
            'genre' => 'Drama',
        ],
        [
            'no' => 5,
            'judul' => 'Danur',
            'genre' => 'Horor',
        ],
    ];

    public function getAllMovies()
    {
        return $this->genres;
    }
}
