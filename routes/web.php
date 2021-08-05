<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ahmad Muhbit",
        "email" => "ahmadmuhbit@gmail.com",
        "image" => "laptop.png"
    ]);
});


Route::get('/blog', function () {

    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
