<?php

namespace Database\Seeders;

use App\Models\Post;
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
        $posts =[
            [
                'title'         => 'Post 1',
                'description'   => 'Post pertama',
                'user_id'       => 1
            ],
            [
                'title'         => 'Post 2',
                'description'   => 'Post Kedua', 
                'user_id'       => null
            ]
        ];

        Post::insert($posts);
    }
}
