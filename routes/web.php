<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view ('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view ('about', [
        "title" => "About",
        "name" => "Rizal Baihaqi",
        "email" => "203040067@mail.unpas.ac.id",
        "image" => "rizal.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal Baihaqi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequuntur quis mollitia perspiciatis ipsam, expedita veniam id illo vero impedit quibusdam! Delectus, fuga. Esse ad eos incidunt doloremque quisquam porro nihil enim earum quas deserunt adipisci, cupiditate nulla fugiat, aspernatur, eaque quo sit provident saepe deleniti atque praesentium. Illum similique magni adipisci corrupti totam. Dolores blanditiis aliquam, provident similique nobis alias pariatur itaque dignissimos harum aliquid ipsum quisquam, dolorum consectetur? Id accusantium animi cupiditate voluptates, atque doloribus velit quos eius!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde voluptates, molestiae omnis error facere, quasi esse illo a similique sint pariatur laboriosam nobis vitae hic quidem cumque! Quis iste fugiat ratione, ullam animi maiores, doloribus fugit obcaecati iusto saepe earum. Dicta ea tenetur eveniet itaque rerum exercitationem et minus voluptatum sapiente mollitia quidem dolorum autem ullam necessitatibus fugit iusto, illo eaque impedit velit nam ipsum aliquid! Officia facilis dolorum temporibus blanditiis dolores ullam sed fugit eligendi aliquam saepe cumque voluptatum rerum laborum harum veniam aspernatur itaque deserunt dolore, voluptate nesciunt repellat. Ut aliquam accusamus dolore, perspiciatis sunt neque rerum natus?"
        ]
    ];

    return view ('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizal Baihaqi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum consequuntur quis mollitia perspiciatis ipsam, expedita veniam id illo vero impedit quibusdam! Delectus, fuga. Esse ad eos incidunt doloremque quisquam porro nihil enim earum quas deserunt adipisci, cupiditate nulla fugiat, aspernatur, eaque quo sit provident saepe deleniti atque praesentium. Illum similique magni adipisci corrupti totam. Dolores blanditiis aliquam, provident similique nobis alias pariatur itaque dignissimos harum aliquid ipsum quisquam, dolorum consectetur? Id accusantium animi cupiditate voluptates, atque doloribus velit quos eius!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde voluptates, molestiae omnis error facere, quasi esse illo a similique sint pariatur laboriosam nobis vitae hic quidem cumque! Quis iste fugiat ratione, ullam animi maiores, doloribus fugit obcaecati iusto saepe earum. Dicta ea tenetur eveniet itaque rerum exercitationem et minus voluptatum sapiente mollitia quidem dolorum autem ullam necessitatibus fugit iusto, illo eaque impedit velit nam ipsum aliquid! Officia facilis dolorum temporibus blanditiis dolores ullam sed fugit eligendi aliquam saepe cumque voluptatum rerum laborum harum veniam aspernatur itaque deserunt dolore, voluptate nesciunt repellat. Ut aliquam accusamus dolore, perspiciatis sunt neque rerum natus?"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;

        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});