<?php

namespace App\Http\Controllers\Client\Calculator;

use App\Http\Controllers\Controller;

class MortgageController extends Controller
{
    public function index()
    {
        return view('client.calculator.mortgage.index');
    }
}
