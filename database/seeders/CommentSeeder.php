<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments =[
            [
                'description'   => 'Test Comment',
                'post_id'       => 1,
            ],
            [
                'description'   => 'Test Comment',
                'post_id'       => 2,
            ]
        ];

        Comment::insert($comments);
    }
}
