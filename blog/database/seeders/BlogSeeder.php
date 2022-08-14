<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Blog::factory()->create([
            'user_id' => 1,
            'title' => 'Bangla Puzzle',
            'slug' => 'Bangla,Puzzle,BanglaPuzzle',
            'description' => 'Bangla Puzzle Limited is IT and Software company based on Dhaka, Bangladesh. We provide android, iOS app, AR app, Virtual Reality app and Artificial Intelligence.
            Bangla Puzzle Limited is registered in RJSC, and Dhaka North City Corporation.',
            'image' => 'index.png',
            'created_at' => '2022-05-23 02:24:08',
            'updated_at' => '2022-05-23 02:24:08'

        ]);
    }
}
