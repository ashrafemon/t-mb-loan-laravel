<?php

namespace App\Http\Controllers\Client\Calculator;

use App\Http\Controllers\Controller;

class StampDutyController extends Controller
{
    public function index()
    {
        return view('client.calculator.stamp.index');
    }
}
