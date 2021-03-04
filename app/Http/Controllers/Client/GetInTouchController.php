<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Complain;
use App\Models\Configure;
use App\Models\Hero;
use App\Models\Office;

class GetInTouchController extends Controller
{
    public function index()
    {
        $hero = Hero::where('name', 'Touch')->first();
        $offices = Office::all();
        $configure = Configure::first();
        return view('client.get_in_touch.index', compact('hero', 'offices', 'configure'));
    }

    public function complain()
    {
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $complain = new Complain();

        $complain->first_name = request('first_name');
        $complain->last_name = request('last_name');
        $complain->email = request('email');
        $complain->phone = request('phone');
        $complain->message = request('message');

        $complain->save();

        return redirect()->route('get_in_touch')->with('message', 'Complain sent...');
    }
}
