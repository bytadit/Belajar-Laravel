<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Aditya',
            'username' => 'adityabp',
            'email' => 'adityabp@gmail.com',
            'password' => bcrypt('adityabp'),
            'remember_token' => Str::random(10),
            'is_admin' => 1
        ]);

        // User::create([
        //     'name' => 'Nandha',
        //     'email' => 'nandhajs@gmail.com',
        //     'password' => bcrypt('nandhajs')
        // ]);



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
        //     'category_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum pertama',
        //     'body' => '<p>saeLorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus tempora pe delectus similique, recusandae quis animi, provident, iure veritatis esse non enim iusto ad eum quae itaque atque ullam ab nesciunt. Velit, temporibus? Totam temporibus, aspernatur vel accusamus recusandae, sequi facilis animi nulla quibusdam a cumque nam iste vitae exercitationem autem. Beatae, aspernatur nostrum, facilis eaque nobis culpa repudiandae hic vel nesciunt aliquid sapiente? Quod repellat harum sed odit rem exercitationem fuga odio suscipit quam id, officiis quibusdam expedita placeat.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ex temporibus eius est culpa perspiciatis, accusantium dolor cumque et neque, quidem debitis dignissimos quae distinctio. Enim totam ducimus a voluptate? Voluptates molestias alias tempore saepe quas perferendis vel et iste quisquam vitae facilis possimus soluta totam rerum, quidem consequuntur reiciendis doloribus sit omnis ullam nisi? Magni neque quasi, aliquam quae omnis recusandae eum quidem suscipit impedit! Voluptate, similique modi. Necessitatibus quibusdam atque consequuntur esse tenetur tempore ipsum quo reprehenderit dolor ut id amet eius a, suscipit omnis fugit doloribus ex fuga sed voluptatibus voluptatum hic. Dolore animi fugiat nostrum mollitia!</p>',
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 1,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum kedua',
        //     'body' => '<p>saeLorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus tempora pe delectus similique, recusandae quis animi, provident, iure veritatis esse non enim iusto ad eum quae itaque atque ullam ab nesciunt. Velit, temporibus? Totam temporibus, aspernatur vel accusamus recusandae, sequi facilis animi nulla quibusdam a cumque nam iste vitae exercitationem autem. Beatae, aspernatur nostrum, facilis eaque nobis culpa repudiandae hic vel nesciunt aliquid sapiente? Quod repellat harum sed odit rem exercitationem fuga odio suscipit quam id, officiis quibusdam expedita placeat.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ex temporibus eius est culpa perspiciatis, accusantium dolor cumque et neque, quidem debitis dignissimos quae distinctio. Enim totam ducimus a voluptate? Voluptates molestias alias tempore saepe quas perferendis vel et iste quisquam vitae facilis possimus soluta totam rerum, quidem consequuntur reiciendis doloribus sit omnis ullam nisi? Magni neque quasi, aliquam quae omnis recusandae eum quidem suscipit impedit! Voluptate, similique modi. Necessitatibus quibusdam atque consequuntur esse tenetur tempore ipsum quo reprehenderit dolor ut id amet eius a, suscipit omnis fugit doloribus ex  fuga sed voluptatibus voluptatum hic. Dolore animi fugiat nostrum mollitia!</p>',
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum ketiga',
        //     'body' => '<p>saeLorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus tempora pe delectus similique, recusandae quis animi, provident, iure veritatis esse non enim iusto ad eum quae itaque atque ullam ab nesciunt. Velit, temporibus? Totam temporibus, aspernatur vel accusamus recusandae, sequi facilis animi nulla quibusdam a cumque nam iste vitae exercitationem autem. Beatae, aspernatur nostrum, facilis eaque nobis culpa repudiandae hic vel nesciunt aliquid sapiente? Quod repellat harum sed odit rem exercitationem fuga odio suscipit quam id, officiis quibusdam expedita placeat.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ex temporibus eius est culpa perspiciatis, accusantium dolor cumque et neque, quidem debitis dignissimos quae distinctio. Enim totam ducimus a voluptate? Voluptates molestias alias tempore saepe quas perferendis vel et iste quisquam vitae facilis possimus soluta totam rerum, quidem consequuntur reiciendis doloribus sit omnis ullam nisi? Magni neque quasi, aliquam quae omnis recusandae eum quidem suscipit impedit! Voluptate, similique modi. Necessitatibus quibusdam atque consequuntur esse tenetur tempore ipsum quo reprehenderit dolor ut id amet eius a, suscipit omnis fugit doloribus ex fuga sed voluptatibus voluptatum hic. Dolore animi fugiat nostrum mollitia!</p>',
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'category_id' => 2,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum keempat',
        //     'body' => '<p>saeLorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus tempora pe delectus similique, recusandae quis animi, provident, iure veritatis esse non enim iusto ad eum quae itaque atque ullam ab nesciunt. Velit, temporibus? Totam temporibus, aspernatur vel accusamus recusandae, sequi facilis animi nulla quibusdam a cumque nam iste vitae exercitationem autem. Beatae, aspernatur nostrum, facilis eaque nobis culpa repudiandae hic vel nesciunt aliquid sapiente? Quod repellat harum sed odit rem exercitationem fuga odio suscipit quam id, officiis quibusdam expedita placeat.</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit ex temporibus eius est culpa perspiciatis, accusantium dolor cumque et neque, quidem debitis dignissimos quae distinctio. Enim totam ducimus a voluptate? Voluptates molestias alias tempore saepe quas perferendis vel et iste quisquam vitae facilis possimus soluta totam rerum, quidem consequuntur reiciendis doloribus sit omnis ullam nisi? Magni neque quasi, aliquam quae omnis recusandae eum quidem suscipit impedit! Voluptate, similique modi. Necessitatibus quibusdam atque consequuntur esse tenetur tempore ipsum quo reprehenderit dolor ut id amet eius a, suscipit omnis fugit doloribus ex fuga sed voluptatibus voluptatum hic. Dolore animi fugiat nostrum mollitia!</p>',
        //     'user_id' => 2
        // ]);
    }
}
