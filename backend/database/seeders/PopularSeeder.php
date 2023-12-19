<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Popular;
class PopularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Solo Leveling',
                'genre' => 'Action, Fantasy, Adventure',
                'status' => 'Finished',
                'image' => 'https://i.pinimg.com/originals/c1/b5/a2/c1b5a21daca4c244786642a629339582.jpg'
            ],
            [
              
                'title' => 'Return of Mount Hua Sect',
                'genre' => 'Action, Adventure, Fantasy, Martial arts, Shounen',
                'status' => 'Ongoing',
                'image' => 'https://novel-gate.com/wp-content/uploads/2022/01/Return-of-the-Mountain-Hua-Sect-1.jpg'
            ],
            [
                
                'title' => 'Eleeced',
                'genre' => 'Action, Fantasy, Shounen',
                'status' => 'Ongoing',
                'image' => 'https://i.pinimg.com/236x/3b/3f/f5/3b3ff5e455b382b12bcb5c949d9af390.jpg'
            ],
            [
               
                'title' => 'Damn Reincarnation',
                'genre' => 'Action, Fantasy, Regression',
                'status' => 'Ongoing',
                'image' => 'https://i.pinimg.com/236x/32/a7/8d/32a78d43a5eeb329fc6c89cc0ad5d3d3.jpg'
            ],
            [
               
                'title' => 'Legend of the Northern Blade',
                'genre' => 'Action, Fantasy, Murim, Martial Arts',
                'status' => 'Ongoing',
                'image' => 'https://i.pinimg.com/236x/20/04/0c/20040c00a7f0bc43d9d8bd948310655d.jpg'
            ],
            [
                
                'title' => 'The Beginning After the End',
                'genre' => 'Action, Fantasy, Magic',
                'status' => 'ongoing',
                'image' => 'https://i.pinimg.com/236x/c4/b3/6b/c4b36b560412545e6a71927ff3c46aeb.jpg'
            ],
            [
                
                'title' => 'The Greatest Estate Developer',
                'genre' => 'Action, Fantasy, Comedy',
                'status' => 'ongoing',
                'image' => 'https://i.pinimg.com/236x/b7/65/76/b76576f79bbf107b658a88122c20e55e.jpg'
            ],
            [
                
                'title' => "Academy's Genius Swordsman",
                'genre' => 'Action, Fantasy, Shounen',
                'status' => 'ongoing',
                'image' => 'https://i.pinimg.com/236x/25/18/22/2518222c2edb62a0f640005d62f2984f.jpg'
            ],
            [
               
                'title' => 'Solo Max-Level Newbie',
                'genre' => 'Action, Fantasy',
                'status' => 'Ongoing',
                'image' => 'https://i.pinimg.com/236x/f4/8d/9a/f48d9a9fb8007404b045cd0191e1ba08.jpg'
            ],
            [
               
                'title' => 'Nano Machine',
                'genre' => 'Action, Fantasy, Murim',
                'status' => 'ongoing',
                'image' => 'https://i.pinimg.com/236x/32/17/b8/3217b8ef00490ed55c9d41b46c7e0849.jpg'
            ],

            [
               
                'title' => 'Legend of the Northern Blade',
                'genre' => 'Action, Fantasy, Murim, Martial Arts',
                'status' => 'Ongoing',
                'image' => 'https://i.pinimg.com/236x/20/04/0c/20040c00a7f0bc43d9d8bd948310655d.jpg'
            ],
            [
               
                'title' => 'Solo Max-Level Newbie',
                'genre' => 'Action, Fantasy',
                'status' => 'Ongoing',
                'image' => 'https://i.pinimg.com/236x/f4/8d/9a/f48d9a9fb8007404b045cd0191e1ba08.jpg'
            ],
            [
               
                'title' => 'Legend of the Northern Blade',
                'genre' => 'Action, Fantasy, Murim, Martial Arts',
                'status' => 'Ongoing',
                'image' => 'https://i.pinimg.com/236x/20/04/0c/20040c00a7f0bc43d9d8bd948310655d.jpg'
            ],
        ];

        foreach($data as $d) {
            Popular::create($d);
        }
    }
}

