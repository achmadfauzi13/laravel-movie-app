<?php

namespace Database\Seeders;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run():void
    {
        Review::create([
            'id' => 1,
            'movie' => 'One Piece',
            'movie_id' => '1',
            'user' => 'Asep Kotak',
            'rating' => '9/10',
            'date' => '2022-11-14',
        ]);
        Review::create([
            'id' => 2,
            'movie' => 'Demon Slayer',
            'movie_id' => '2',
            'user' => 'Otoy',
            'rating' => '8/10',
            'date' => '2021-09-12',
        ]);
        Review::create([
            'id' => 3,
            'movie' => 'Gintama',
            'movie_id' => '2',
            'user' => 'ucok',
            'rating' => '7,5/10',
            'date' => '2020-10-11',
        ]);
    }
}
