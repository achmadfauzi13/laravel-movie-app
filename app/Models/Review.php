<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'poster' => 'movie-05.jpeg',
            'name' => 'One Piece',
            'user' => 'Takuy',
            'rating' => '9/10',
            'date' => '2023-07-15 20:50:02/10',
        ],
        [
            'id' => 2,
            'poster' => 'movie-06.jpeg',
            'name' => 'Demon Slayer',
            'user' => 'Sugito',
            'rating' => '9/10',
            'date' => '2024-01-13 10:55:09',
        ],
        [
            'id' => 3,
            'poster' => 'movie-07.jpeg',
            'name' => 'Gintama',
            'user' => 'Cecep',
            'rating' => '9/10',
            'date' => '2024-03-27 12:30:55',
        ],
        [
            'id' => 4,
            'poster' => 'movie-09.jpeg',
            'name' => 'Jujutsu Kaisen',
            'user' => 'Otoy',
            'rating' => '10/10',
            'date' => '2023-12-01 11:30:20',
        ],
        [
            'id' => 5,
            'poster' => 'movie-08.jpeg',
            'name' => 'Solo Leveling',
            'user' => 'Asep kotak',
            'rating' => '8/10',
            'date' => '2022-04-17 12:35:00',
        ],
        
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}