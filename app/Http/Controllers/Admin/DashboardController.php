<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Client;
use App\Models\Complain;
use App\Models\Loan;
use App\Models\Office;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $offices = Office::all();
        $complains = Complain::all();
        $loans = Loan::all();
        $posts = Post::all();
        $appointments = Appointment::all();

        return view('admin.dashboard.index', compact('clients', 'offices', 'complains', 'loans', 'posts', 'appointments'));
    }
}
