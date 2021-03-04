<?php

namespace App\Http\Controllers\Client\Calculator;

use App\Http\Controllers\Controller;

class SavingController extends Controller
{
    public function index()
    {
        return view('client.calculator.savings.index');
    }
}
