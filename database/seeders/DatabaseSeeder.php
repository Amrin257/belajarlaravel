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
        //     'name' => 'Muh. Nur Amrin',
        //     'email' => 'Amrinnur6@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Angga Cess',
        //     'email' => 'Angga@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create(); 

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'

        ]);

        Category::create([
            'name' => 'Web-Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis eligendi qui quas illo nesciunt inventore, neque tempora, consequuntur, earum ab labore. Tempore laudantium deleniti neque quaerat rerum quae? Quam nemo esse expedita, quia id illo incidunt animi recusandae error officia adipisci impedit eum quos suscipit ipsum, omnis tempora.</p> <p>  Voluptatem, consequuntur facere. Beatae labore similique natus aliquam dolorum odio voluptate inventore, voluptates fuga minus? Magni ratione pariatur ut facere quam. Molestiae dolor voluptates ratione, minus obcaecati praesentium nostrum libero autem. Sunt quos ullam optio vel magnam, autem aliquid assumenda soluta minus doloremque quaerat eos alias ipsam. Eum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis eligendi qui quas illo nesciunt inventore, neque tempora, consequuntur, earum ab labore. Tempore laudantium deleniti neque quaerat rerum quae? Quam nemo esse expedita, quia id illo incidunt animi recusandae error officia adipisci impedit eum quos suscipit ipsum, omnis tempora.</p> <p>  Voluptatem, consequuntur facere. Beatae labore similique natus aliquam dolorum odio voluptate inventore, voluptates fuga minus? Magni ratione pariatur ut facere quam. Molestiae dolor voluptates ratione, minus obcaecati praesentium nostrum libero autem. Sunt quos ullam optio vel magnam, autem aliquid assumenda soluta minus doloremque quaerat eos alias ipsam. Eum.</p>',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia reiciendis ipsam non nobis eligendi qui quas illo nesciunt inventore, neque tempora, consequuntur, earum ab labore. Tempore laudantium deleniti neque quaerat rerum quae? Quam nemo esse expedita, quia id illo incidunt animi recusandae error officia adipisci impedit eum quos suscipit ipsum, omnis tempora.</p> <p>  Voluptatem, consequuntur facere. Beatae labore similique natus aliquam dolorum odio voluptate inventore, voluptates fuga minus? Magni ratione pariatur ut facere quam. Molestiae dolor voluptates ratione, minus obcaecati praesentium nostrum libero autem. Sunt quos ullam optio vel magnam, autem aliquid assumenda soluta minus doloremque quaerat eos alias ipsam. Eum.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
