<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Train to Busan',
            'user' => 'Imelda',
            'rating' => 9.0,
            'deskripsi' => 'Cerita Zombie yang seru dan menegangkan di antara film zombie yang lain',
            'tanggal' => '2023:01:01',
        ]);

        Review::create([
            'film' => 'Mariposa',
            'user' => 'Melda',
            'rating' => 8.5,
            'deskripsi' => 'Ceritanya bagus banget, cocok untuk remaja',
            'tanggal' => '2023:02:02',
        ]);

        Review::create([
            'film' => 'Orang Kaya Baru',
            'user' => 'Jasmine',
            'rating' => 9.5,
            'deskripsi' => 'Cerita ini sangat lucu, cocok untuk kamu yang suka komedi',
            'tanggal' => '2023:03:03',
        ]);

        Review::create([
            'film' => 'Antares',
            'user' => 'Zayn',
            'rating' => 8.9,
            'deskripsi' => 'Cerita geng motor yang sangat seru',
            'tanggal' => '2023:04:04',
        ]);

        Review::create([
            'film' => 'Danur',
            'user' => 'Dian',
            'rating' => 9.2,
            'deskripsi' => 'Cerita horor yang menegangkan dan seru',
            'tanggal' => '2023:05:05',
        ]);
    }
}
