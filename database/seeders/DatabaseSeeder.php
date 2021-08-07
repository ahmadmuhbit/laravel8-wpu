<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Ahmad Muhbit',
        //     'email' => 'ahmadmuhbit@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid, qui doloremque nemo vitae minima ducimus aliquam quisquam modi aut rerum reprehenderit dicta.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid, qui doloremque nemo vitae minima ducimus aliquam quisquam modi aut rerum reprehenderit dicta. Aut animi maxime eum non tenetur nam omnis ducimus illo quam explicabo, dolorum mollitia adipisci dolorem laborum. Ad nulla, expedita fuga harum explicabo deserunt ab odit non dicta nesciunt impedit architecto minus fugiat dignissimos odio modi molestiae, eum cumque fugit, voluptatum totam et sapiente. Asperiores voluptates consequatur placeat eligendi suscipit fuga velit aspernatur tempora a molestias ullam tenetur debitis illum officia minima dicta, maxime culpa neque amet voluptatibus cupiditate doloribus iusto. Ratione quam laboriosam illo? Quia.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid, qui doloremque nemo vitae minima ducimus aliquam quisquam modi aut rerum reprehenderit dicta.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid, qui doloremque nemo vitae minima ducimus aliquam quisquam modi aut rerum reprehenderit dicta. Aut animi maxime eum non tenetur nam omnis ducimus illo quam explicabo, dolorum mollitia adipisci dolorem laborum. Ad nulla, expedita fuga harum explicabo deserunt ab odit non dicta nesciunt impedit architecto minus fugiat dignissimos odio modi molestiae, eum cumque fugit, voluptatum totam et sapiente. Asperiores voluptates consequatur placeat eligendi suscipit fuga velit aspernatur tempora a molestias ullam tenetur debitis illum officia minima dicta, maxime culpa neque amet voluptatibus cupiditate doloribus iusto. Ratione quam laboriosam illo? Quia.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid, qui doloremque nemo vitae minima ducimus aliquam quisquam modi aut rerum reprehenderit dicta.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid, qui doloremque nemo vitae minima ducimus aliquam quisquam modi aut rerum reprehenderit dicta. Aut animi maxime eum non tenetur nam omnis ducimus illo quam explicabo, dolorum mollitia adipisci dolorem laborum. Ad nulla, expedita fuga harum explicabo deserunt ab odit non dicta nesciunt impedit architecto minus fugiat dignissimos odio modi molestiae, eum cumque fugit, voluptatum totam et sapiente. Asperiores voluptates consequatur placeat eligendi suscipit fuga velit aspernatur tempora a molestias ullam tenetur debitis illum officia minima dicta, maxime culpa neque amet voluptatibus cupiditate doloribus iusto. Ratione quam laboriosam illo? Quia.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid, qui doloremque nemo vitae minima ducimus aliquam quisquam modi aut rerum reprehenderit dicta.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis incidunt aliquid, qui doloremque nemo vitae minima ducimus aliquam quisquam modi aut rerum reprehenderit dicta. Aut animi maxime eum non tenetur nam omnis ducimus illo quam explicabo, dolorum mollitia adipisci dolorem laborum. Ad nulla, expedita fuga harum explicabo deserunt ab odit non dicta nesciunt impedit architecto minus fugiat dignissimos odio modi molestiae, eum cumque fugit, voluptatum totam et sapiente. Asperiores voluptates consequatur placeat eligendi suscipit fuga velit aspernatur tempora a molestias ullam tenetur debitis illum officia minima dicta, maxime culpa neque amet voluptatibus cupiditate doloribus iusto. Ratione quam laboriosam illo? Quia.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
