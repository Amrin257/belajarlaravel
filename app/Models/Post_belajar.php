<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muh. Nur Amrin",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi officia pariatur aut aperiam sint corporis ab adipisci harum, neque, magnam iste inventore natus aspernatur ipsam rem facilis impedit quis distinctio"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Fitriani",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, recusandae consectetur doloremque quam veniam neque illo dolorem ad earum. Consequatur architecto, ipsum excepturi maxime, omnis quisquam vero iste eos quos nobis, earum beatae ipsa ab harum rerum natus. Eos autem excepturi qui ea dolores! Rem voluptas autem quod itaque suscipit?"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        // fungsinya di bawah me loping variabel di bawah
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug){
        //         $post = $p; 
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
