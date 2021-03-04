<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return view('client.post.show', compact('post'));
    }
}
