<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::create([
        //     'name'  => 'Rizal Baihaqi',
        //     'email' => '203040067@mail.unpas.ac.id',
        //     'password' => bcrypt('12345')
        // ]);
        
        // User::create([
        //     'name'  => 'Sandhika Galih',
        //     'email' => 'sandhikagalih@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, expedita et eaque, animi quam dignissimos labore facere fuga quaerat eveniet harum deleniti iure numquam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, expedita et eaque, animi quam dignissimos labore facere fuga quaerat eveniet harum deleniti iure numquam, quia laborum exercitationem ut doloremque nulla magnam velit natus vitae consequuntur esse? Necessitatibus debitis quo laudantium, enim esse, eius a quasi numquam perspiciatis eveniet laboriosam tenetur at! Beatae, fugiat, accusamus ad molestias nobis eum molestiae architecto harum perferendis totam odio dignissimos! Architecto quod ab quos magnam facilis, error nulla recusandae cum minima! Eum officiis quaerat fuga, sapiente consequatur possimus sed qui facere obcaecati a assumenda maiores velit architecto soluta reiciendis, earum laboriosam. Harum corporis sunt error?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, expedita et eaque, animi quam dignissimos labore facere fuga quaerat eveniet harum deleniti iure numquam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, expedita et eaque, animi quam dignissimos labore facere fuga quaerat eveniet harum deleniti iure numquam, quia laborum exercitationem ut doloremque nulla magnam velit natus vitae consequuntur esse? Necessitatibus debitis quo laudantium, enim esse, eius a quasi numquam perspiciatis eveniet laboriosam tenetur at! Beatae, fugiat, accusamus ad molestias nobis eum molestiae architecto harum perferendis totam odio dignissimos! Architecto quod ab quos magnam facilis, error nulla recusandae cum minima! Eum officiis quaerat fuga, sapiente consequatur possimus sed qui facere obcaecati a assumenda maiores velit architecto soluta reiciendis, earum laboriosam. Harum corporis sunt error?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, expedita et eaque, animi quam dignissimos labore facere fuga quaerat eveniet harum deleniti iure numquam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, expedita et eaque, animi quam dignissimos labore facere fuga quaerat eveniet harum deleniti iure numquam, quia laborum exercitationem ut doloremque nulla magnam velit natus vitae consequuntur esse? Necessitatibus debitis quo laudantium, enim esse, eius a quasi numquam perspiciatis eveniet laboriosam tenetur at! Beatae, fugiat, accusamus ad molestias nobis eum molestiae architecto harum perferendis totam odio dignissimos! Architecto quod ab quos magnam facilis, error nulla recusandae cum minima! Eum officiis quaerat fuga, sapiente consequatur possimus sed qui facere obcaecati a assumenda maiores velit architecto soluta reiciendis, earum laboriosam. Harum corporis sunt error?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, expedita et eaque, animi quam dignissimos labore facere fuga quaerat eveniet harum deleniti iure numquam',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, expedita et eaque, animi quam dignissimos labore facere fuga quaerat eveniet harum deleniti iure numquam, quia laborum exercitationem ut doloremque nulla magnam velit natus vitae consequuntur esse? Necessitatibus debitis quo laudantium, enim esse, eius a quasi numquam perspiciatis eveniet laboriosam tenetur at! Beatae, fugiat, accusamus ad molestias nobis eum molestiae architecto harum perferendis totam odio dignissimos! Architecto quod ab quos magnam facilis, error nulla recusandae cum minima! Eum officiis quaerat fuga, sapiente consequatur possimus sed qui facere obcaecati a assumenda maiores velit architecto soluta reiciendis, earum laboriosam. Harum corporis sunt error?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
