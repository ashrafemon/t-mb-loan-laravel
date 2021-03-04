<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Configure;
use App\Models\Loan;
use App\Models\Office;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    public function fetchLoans()
    {
        $loans = Loan::all();

        return response()->json($loans, 200);
    }

    public function fetchConfigure()
    {
        $configure = Configure::first();

        return response()->json($configure, 200);
    }
    
    public function fetchOffice(){
        $office = Office::first();
        
        return response()->json($office, 200);
    }

    public function appointment()
    {
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'contact_number' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'loan_type' => 'required',
            'income_source' => 'required',
        ]);

        $configure = Configure::first();

        $appointment = new Appointment();

        $appointment->first_name = request('first_name');
        $appointment->last_name = request('last_name');
        $appointment->contact_number = request('contact_number');
        $appointment->email = request('email');
        $appointment->address = request('address');
        $appointment->loan_type = request('loan_type');
        $appointment->income_source = request('income_source');
        $appointment->message = request('message') ? request('message') : '';

        $appointment->save();

        Mail::to($configure->mail_receiver, $appointment->first_name . ' ' . $appointment->last_name)->send(new \App\Mail\Appointment($appointment->email, 'Appointment', $appointment));
        
        return response()->json([
            'message' => 'Appointment successfully sent we will contact with you as soon as possible'
        ], 201);
    }
}
