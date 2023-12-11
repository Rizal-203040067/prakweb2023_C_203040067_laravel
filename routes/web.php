<?php

// use App\Http\Controllers\GetImagesController;

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        "active" => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);
});

// untuk menampilkan gambar pada posts
// Route::get('/storage/post-images/{filename}', [GetImagesController::class, 'displayImage']) -> name('image.displayImage');