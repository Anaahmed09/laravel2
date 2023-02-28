<?php

namespace App\Http\Controllers;

use App\Models\auther;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function index()
    {
        $posts = post::get();
        return view('post.index', compact('posts'));
    }
}