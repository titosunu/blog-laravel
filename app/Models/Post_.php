<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Pratito Sunu",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, accusamus in! Saepe reprehenderit quam, amet quibusdam fugit dolor. Molestiae labore sequi nostrum sunt tenetur porro earum obcaecati provident nesciunt, facilis, vel explicabo consequuntur, a beatae culpa velit. Autem commodi architecto ipsa sequi repellendus veniam, at adipisci laudantium, voluptatum laborum deleniti incidunt, asperiores aliquid perferendis iste aut molestias repudiandae officia ipsam necessitatibus? Autem nobis odio deleniti accusantium obcaecati recusandae consequuntur possimus maxime, delectus distinctio tempora natus accusamus commodi maiores neque a."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Bintang Kurniawan",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo, accusamus in! Saepe reprehenderit quam, amet quibusdam fugit dolor. Molestiae labore sequi nostrum sunt tenetur porro earum obcaecati provident nesciunt, facilis, vel explicabo consequuntur, a beatae culpa velit. Autem commodi architecto ipsa sequi repellendus veniam, at adipisci laudantium, voluptatum laborum deleniti incidunt, asperiores aliquid perferendis iste aut molestias repudiandae officia ipsam necessitatibus? Autem nobis odio deleniti accusantium obcaecati recusandae consequuntur possimus maxime, delectus distinctio tempora natus accusamus commodi maiores neque a."
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
