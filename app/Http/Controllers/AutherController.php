<?php

namespace App\Http\Controllers;

use App\Models\auther;
use App\Models\post;
use Illuminate\Http\Request;

class AutherController extends Controller
{
    function index()
    {
        $authors = auther::get();
        return view('author.index', compact('authors'));
    }
    function show($id)
    {
        $author = auther::find($id);
        return view('post.show', compact('author'));
    }
}