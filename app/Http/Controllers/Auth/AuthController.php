<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function login()
    {
        $data = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect()->route('admin.dashboard.index')->with('message', 'Login Successful');
        }

        return redirect()->back()->with('message', 'Credentials not matched...');
    }

    public function registerView()
    {
        return view('auth.register');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
