<?php

use App\Models\Post;
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
Route::get('posts/{post:slug}', [PostController::class, 'show']);