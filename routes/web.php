<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

  
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
    return view('home' ,[
        "title" => "Home"
    ]);
});

Route::get('/About', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muh. Nur Amrin",
        "email" => "Amrinnur@gmail.com",
        "image" => "sulse.png"
    ]);
});

Route::get('/Halamanku', function () {
    return view('tambahan', [
        "name" => "Muh. Anugrah",
        "npm" => "2017020038"
    ]);
});


Route::get('/blog', [PostController::class, 'index']);

//Halaman Singel post
// {post:slug} -> mencari id berdasarkan Slug

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()

    ]);
});

Route::get('/categories/{category:slug}' , function (Category $category) {
    return view('posts', [
        'title'     => "Post By Category : $category->name", 
        'active' => 'categories',
        // koneksi ke model Category
        // ->load('author','category') == menringankan beban databse 
        'posts'     => $category->posts->load('category','author'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title'  => "Post By Author : $author->name",
        // koneksi ke model Category
        // ->load('author','category') == menringankan beban databse 
        'posts'   => $author->posts->load('author','category'),
    ]);
});