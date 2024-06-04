<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => '1',
            'user' => 'Asep Kotak',
            'ratting' => '9/10',
            'date' => '2023-03-24',
        ]);
        Review::create([
            'id' => 2,
            'movie_id' => '2',
            'user' => 'Otoy',
            'ratting' => '8/10',
            'date' => '2021-08-24',
        ]);
        Review::create([
            'id' => 3,
            'movie_id' => '3',
            'user' => 'Khobib',
            'ratting' => '9.5/10',
            'date' => '2004-05-24',
        ]);
    }
}