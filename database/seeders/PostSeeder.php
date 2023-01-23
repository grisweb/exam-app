<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\Post::create([
//             'title' => 'First post',
//             'content' => 'Lorem lorem ipsum',
//         ]);
//
//        \App\Models\Post::create([
//            'title' => 'Second post',
//            'content' => 'Lorem lorem ipsum',
//        ]);
//
//        \App\Models\Post::create([
//            'title' => 'Third post',
//            'content' => 'Lorem lorem ipsum',
//        ]);

        \App\Models\Post::create([
            'title' => 'Fourth post',
            'content' => 'Lorem lorem ipsum',
        ]);
    }
}
