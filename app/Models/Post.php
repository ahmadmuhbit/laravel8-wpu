<?php

namespace App\Models;

class Post 
{

    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Muhbit",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. A ratione ullam eum dolorum adipisci inventore porro similique earum blanditiis reprehenderit culpa totam, numquam, perferendis iste dolorem iusto libero, voluptatem nobis? Itaque ratione dicta similique nisi quidem aliquam quasi aut quisquam inventore, vel tempora velit ad quae dignissimos voluptatibus libero veritatis consectetur accusantium omnis consequatur maxime laudantium! Voluptatem, nam provident deserunt quibusdam, tenetur voluptas rerum commodi neque facilis unde obcaecati. Perspiciatis voluptatum impedit placeat autem accusamus cupiditate deserunt ad provident blanditiis."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, est maiores. Repellat iste in veniam temporibus voluptatum at, nemo tenetur mollitia quae quos aperiam doloribus sequi architecto est quaerat repellendus nisi culpa inventore nulla explicabo autem. Velit provident animi quae quas nostrum, nesciunt corporis consequuntur omnis! Natus perspiciatis dolore quos impedit porro, repellat qui aliquam dolor asperiores molestiae, nam corrupti voluptatibus quas. Expedita nemo temporibus officiis enim porro nulla veritatis illum voluptates optio adipisci? Possimus, ea mollitia sapiente obcaecati quam esse in nesciunt aut assumenda neque, temporibus ipsum necessitatibus quidem distinctio quae quia, molestiae odit harum sequi maiores? Beatae, sint."
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
