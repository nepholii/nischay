<?php

namespace Database\Seeders;
use App\Models\Movie; // adjust the namespace if your model is in a different folder
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    Movie::create([
        'name' => 'Inception',
        'description' => 'A mind-bending thriller where dream invasion is possible.',
        'duration' => 148,
        'release_date' => '2010-07-16',
        'rating' => 8.8,
        'genre_id' => 1, 
        'language' => 'English',
        'cast' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);

    Movie::create([
        'name' => 'Interstellar',
        'description' => 'Explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
        'duration' => 169,
        'release_date' => '2014-11-07',
        'rating' => 8.6,
        'genre_id' => 1,
        'language' => 'English',
        'cast' => 'Matthew McConaughey, Anne Hathaway, Jessica Chastain',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ]);
}

}
