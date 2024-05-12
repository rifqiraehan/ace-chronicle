<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Raehan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut soluta a ullam delectus magni natus, corrupti dolor dignissimos? Veritatis nostrum mollitia eos tempora veniam consequatur odit eaque repudiandae enim voluptatum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut soluta a ullam delectus magni natus, corrupti dolor dignissimos? Veritatis nostrum mollitia eos tempora veniam consequatur odit eaque repudiandae enim voluptatum?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Alvan",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut soluta a ullam delectus magni natus, corrupti dolor dignissimos? Veritatis nostrum mollitia eos tempora veniam consequatur odit eaque repudiandae enim voluptatum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut soluta a ullam delectus magni natus, corrupti dolor dignissimos? Veritatis nostrum mollitia eos tempora veniam consequatur odit eaque repudiandae enim voluptatum?"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Lala",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut soluta a ullam delectus magni natus, corrupti dolor dignissimos? Veritatis nostrum mollitia eos tempora veniam consequatur odit eaque repudiandae enim voluptatum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut soluta a ullam delectus magni natus, corrupti dolor dignissimos? Veritatis nostrum mollitia eos tempora veniam consequatur odit eaque repudiandae enim voluptatum?"
        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}

