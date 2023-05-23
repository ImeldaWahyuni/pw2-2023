<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $users = [
        [
            'no' => 1,
            'nama' => 'Imelda',
            'username' => 'Imeldawhyi',
            'password' => '123456',
            'email' => 'imel@gmail.com',
            'role' => 'Administrator',
        ],
        [
            'no' => 2,
            'nama' => 'Melda',
            'username' => 'meldaaa',
            'password' => 'acbdefg',
            'email' => 'melda@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 3,
            'nama' => 'jasmine',
            'username' => 'jasmineNa',
            'password' => '123abcd',
            'email' => 'jasmine@gmail.com',
            'role' => 'User',
        ],
        [
            'no' => 4,
            'nama' => 'zayn',
            'username' => 'zaynRb',
            'password' => 'zayn123',
            'email' => 'zayn@gmail.com',
            'role' => 'Administrator',
        ],
        [
            'no' => 5,
            'nama' => 'Dian',
            'username' => 'Diananda',
            'password' => 'dian123',
            'email' => 'dian@gmail.com',
            'role' => 'User',
        ],
    ];

    public function getAllMovies()
    {
        return $this->users;
    }
}
