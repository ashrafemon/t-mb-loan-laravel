<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Configure;
use App\Models\Hero;

class WhyUsController extends Controller
{
    public function index()
    {
        $hero = Hero::where('name', 'Why')->first();
        // $clients = Client::all();
        $configure = Configure::first();
        return view('client.why_us.index', compact('hero', 'configure'));
    }
}
