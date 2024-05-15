<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get(public_path("data/posts-data.json"));
        $posts = json_decode($json);

        foreach ($posts->posts as $key => $value) {
            Post::create([
                'category_id' => $value->category_id,
                'user_id' => $value->user_id,
                'title' => $value->title,
                'slug' => $value->slug,
                'image' => $value->image,
                'excerpt' => $value->excerpt,
                'body' => $value->body
            ]);
        }
    }
}
