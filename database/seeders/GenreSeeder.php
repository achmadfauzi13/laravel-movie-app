<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'id' => 1,
            'name' => 'Shounen',
            'description' => 'is a genre of anime and manga targeted primarily at a young male audience, usually between the ages of 12 to 18. The genre is known for its action-packed, adventurous, camaraderie stories, and often features protagonists growing and evolving through great challenges.',
        ]);
        Genre::create([
            'id' => 2,
            'name' => 'Drama',
            'description' => 'is an anime genre that focuses on character development and emotions, often exploring complex and realistic life situations. This genre tends to be more serious and profound compared to other genres, trying to highlight feelings, internal conflicts, and relationships between characters.',
        ]);
        Genre::create([
            'id' => 3,
            'name' => 'School',
            'description' => 'focuses on the daily lives of the students in the school environment. This genre often combines elements from other genres such as drama, comedy, romance, and sometimes also fantasy or supernatural. Here are some of the characteristics of school genre anime',
        ]);
    }
}