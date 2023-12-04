<?php

// use App\Http\Controllers\GetImagesController;

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
Route::get('posts/{slug}', [PostController::class, 'show']);

// untuk menampilkan gambar pada posts
// Route::get('/storage/post-images/{filename}', [GetImagesController::class, 'displayImage']) -> name('image.displayImage');