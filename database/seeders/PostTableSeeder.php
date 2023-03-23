<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['id' => 1, 'title' => 'Post title 1', 'description' => '', 'photo' =>''],
            ['id' => 2, 'title' => 'Post title 2', 'description' => '', 'photo' => ''],
            ['id' => 3, 'title' => 'Post title 3', 'description' => '', 'photo' =>'']
        ];
        Post::insert($posts);
    }
}
