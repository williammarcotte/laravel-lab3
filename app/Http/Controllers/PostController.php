<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
public function index()
{
    $posts = \App\Models\Post::with('author')->get();
    return view('posts.index', compact('posts'));
}

public function show($id)
{
    $post = \App\Models\Post::with(['author', 'comments'])->findOrFail($id);
    return view('posts.show', compact('post'));
}

}
