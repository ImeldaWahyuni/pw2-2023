<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Horor',
            'deskripsi' => 'Film horor yang mengandung unsur menegangkan, banyak jump scare nya',
        ]);

        Genre::create([
            'nama' => 'Fiksi Remaja',
            'deskripsi' => 'Film remaja yang menceritakan tentang keluarga, percintaan dan pertemanan',
        ]);

        Genre::create([
            'nama' => 'Komedi',
            'deskripsi' => 'Film yang mengandung unsur receh dan humor',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'deskripsi' => 'Film yang menceritakan tentang geng motor',
        ]);

        Genre::create([
            'nama' => 'Horor',
            'deskripsi' => 'Film yang mengandung unsur seram dan menakutkan',
        ]);
    }
}
