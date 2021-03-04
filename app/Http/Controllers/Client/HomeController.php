<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Configure;
use App\Models\Hero;
use App\Models\Post;
use App\Models\Client;

class HomeController extends Controller
{
    public function index()
    {
        $hero = Hero::where('name', 'Home')->first();
        $posts = Post::where('status', 1)->where('isDisplay', 1)->simplePaginate(6);
        $clients = Client::all();
        $configure = Configure::first();
        return view('client.home.index', compact('hero', 'posts', 'clients', 'configure'));
    }
}
