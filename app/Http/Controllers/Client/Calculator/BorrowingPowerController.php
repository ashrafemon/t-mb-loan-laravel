<?php

namespace App\Http\Controllers\Client\Calculator;

use App\Http\Controllers\Controller;

class BorrowingPowerController extends Controller
{
    public function index()
    {
        return view('client.calculator.borrow_power.index');
    }
}
