<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
            'id' => 1,
            'title' => 'One Piece',
            'movie_id' => '1',
            'user' => 'Asep Kotak',
            'rating' => '9/10',
            'date' => '2022-11-14',
            
        ]);
        Review::create([
            'id' => 1,
            'title' => 'Demon Slayer',
            'movie_id' => '2',
            'user' => 'Otoy',
            'rating' => '8/10',
            'date' => '2020-10-11',
            
        ]);
        Review::create([
            'id' => 1,
            'title' => 'Gintama',
            'movie_id' => '3',
            'user' => 'Cukiman',
            'rating' => '9/10',
            'date' => '2019-06-13',
            
        ]);
    }
}
