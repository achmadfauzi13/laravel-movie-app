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
            'title' => 'One Piece',
            'description' => 'One Piece is a very popular pirate manga series, written and illustrated by Eiichiro Oda.'
        ]);

        Genre::create([
            'id' => 2,
            'title' => 'Demon Slayer',
            'description' => 'Kimetsu no Yaiba(2019) is a historical fantasy anime following Tanjiro Kamado, a young boy who becomes a demon slayer after his family is attacked and his younger sister Nezuko is turned into a demon'
        ]);

        Genre::create([
            'id' => 3,
            'title' => 'Gintama',
            'description' => 'is a science fiction comedy anime set in an Edo period Japan that has been invaded by aliens. The story follows a samurai named Gintoki Sakata who runs a freelance business alongside his companions Shinpachi Shimura and Kagura.'
        ]);
    }
}