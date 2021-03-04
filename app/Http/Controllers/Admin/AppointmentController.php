<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::paginate(10);
        return view('admin.appointment.index', compact('appointments'));
    }

    public function delete($id)
    {
        Appointment::where('id', $id)->delete();
        return redirect()->route('admin.appointment.index')->with('message', 'Successfully appointment deleted...');
    }
}
