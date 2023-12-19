<?php

namespace Database\Seeders;
use App\Models\Manhwa;
use App\Models\Reader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manhwaIds = Manhwa::pluck('id')->toArray();

        Reader::factory(20)->create([
            'manhwa_id' => function () use ($manhwaIds) {
                return array_rand(array_flip($manhwaIds));
            },
        ]);
    }
}
