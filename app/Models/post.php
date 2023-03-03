<?php

namespace App\Models;

class post
{
    private static $blog_post = [
        [
            "tittle" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Muhammad Zaini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, officiis!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis, cupiditate? Labore quod voluptate doloremque corporis dolore quo assumenda praesentium aliquam in, animi natus totam."
        ],
        [
            "tittle" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Muhammad Zaini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, officiis!"
        ],
        [
            "tittle" => "Post Ketiga",
            "slug" => "post-ketiga",
            "author" => "Muhammad Zaini",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, officiis!"
        ],
    ];

    public static function all()
    {
        return  collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $post = static::all();
        return $post->firstWhere('slug', $slug);
    }
}
