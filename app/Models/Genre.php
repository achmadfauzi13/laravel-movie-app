<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'poster' => 'movie-05.jpeg',
            'name' => 'One Piece',
            'description' => 'One Piece is a very popular pirate manga series, written and illustrated by Eiichiro Oda.',
        ],
        [
            'id' => 2,
            'poster' => 'movie-06.jpeg',
            'name' => 'Demon Slayer',
            'description' => 'Kimetsu no Yaiba(2019) is a historical fantasy anime following Tanjiro Kamado, a young boy who becomes a demon slayer after his family is attacked and his younger sister Nezuko is turned into a demon.',
        ],
        [
            'id' => 3,
            'poster' => 'movie-07.jpeg',
            'name' => 'Gintama',
            'description' => 'is a science fiction comedy anime set in an Edo period Japan that has been invaded by aliens. The story follows a samurai named Gintoki Sakata who runs a freelance business alongside his companions Shinpachi Shimura and Kagura.',
        ],
        [
            'id' => 4,
            'poster' => 'movie-09.jpeg',
            'name' => 'Jujutsu Kaisen',
            'description' => ' Itadori Yuji, an ordinary high school boy, swallows a cursed object – a finger of Sukuna, a powerful demon. Now, empowered by the demon, Yuji joins a group of Jujutsu Sorcerers to combat other cursed spirits and the complete resurrection of Sukuna.',
        ],
        [
            'id' => 5,
            'poster' => 'movie-08.jpeg',
            'name' => 'Solo Leveling',
            'description' => ' Solo Leveling" is a manhwa (Korean comic) written by Chu-Gong and illustrated by Jang Sung-rak. The story follows the journey of the main character, Sung Jin-Woo, who was originally a weak Hunter and was considered inferior by society. However, everything changes when he gets a mysterious power that allows him to level up and become an extremely powerful Hunter.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}