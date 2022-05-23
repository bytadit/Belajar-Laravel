<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post 1",
            "slug" => "judul-post-1",
            "author" => "Adit",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates libero incidunt nobis dignissimos ipsam eaque cupiditate porro, repellendus, molestias ratione aspernatur voluptatum cum enim ullam eligendi aliquam repudiandae qui dolore!. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates libero incidunt nobis dignissimos ipsam eaque cupiditate porro, repellendus, molestias ratione aspernatur voluptatum cum enim ullam eligendi aliquam repudiandae qui dolore!"
        ],
        [
            "title" => "Judul Post Adit",
            "slug" => "judul-post-2",
            "author" => "Nanda",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates libero incidunt nobis dignissimos ipsam eaque cupiditate porro, repellendus, molestias ratione aspernatur voluptatum cum enim ullam eligendi aliquam repudiandae qui dolore!. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates libero incidunt nobis dignissimo"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {

        $posts = static::all();

        // $post = [];

        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
