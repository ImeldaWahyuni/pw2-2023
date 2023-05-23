<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'judul' => 'Train to Busan',
            'genre' => 'Thriller',
            'rating' => 9.0,
            'review' => 'Cerita Zombie yang seru dan menegangkan di antara film zombie yang lain',
        ],
        [
            'no' => 2,
            'judul' => 'Mariposa',
            'genre' => 'Fiksi Remaja',
            'rating' => 8.5,
            'review' => 'Ceritanya bagus banget, cocok untuk remaja',
        ],
        [
            'no' => 3,
            'judul' => 'Waktu Magrib',
            'genre' => 'Horor',
            'rating' => 9.5,
            'review' => 'Ceritanya seru dan dapat mengambil pelajaran dari cerita tersebut',
        ],
        [
            'no' => 4,
            'judul' => 'Antares',
            'genre' => 'Drama',
            'rating' => 8.9,
            'review' => 'Cerita geng motor yang sangat seru',
        ],
        [
            'no' => 5,
            'judul' => 'Danur',
            'genre' => 'Horor',
            'rating' => 9.2,
            'review' => 'Cerita horor yang menegangkan dan seru',
        ],
    ];

    public function getAllMovies()
    {
        return $this->reviews;
    }
}
