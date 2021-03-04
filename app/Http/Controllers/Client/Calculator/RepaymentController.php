<?php

namespace App\Http\Controllers\Client\Calculator;

use App\Http\Controllers\Controller;

class RepaymentController extends Controller
{
    public function index()
    {
        return view('client.calculator.repayment.index');
    }
}
