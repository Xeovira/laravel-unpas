<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "tittle" => "Post",
            "posts" => post::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "tittle" => "single post",
            "post" => post::find($slug)
        ]);
    }
}
