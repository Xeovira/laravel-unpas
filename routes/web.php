<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|-----------------------------------n---------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Muhammad Zaini",
        "email" => "muhammadzaini7475@gmail.com",
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

// single post
Route::get('/posts/{slug}', [PostController::class, 'show']);
