<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complain;

class ComplainController extends Controller
{
    public function index()
    {
        $complains = Complain::paginate(10);
        return view('admin.complain.index', compact('complains'));
    }

    public function show($id)
    {
        $complain = Complain::where('id', $id)->first();

        return view('admin.complain.show', compact('complain'));
    }

    public function update($id)
    {
        $complain = Complain::where('id', $id)->first();

        $complain->is_read = 1;

        $complain->update();

        return redirect()->route('admin.complain.index')->with('message', 'Complain read...');
    }

    public function delete($id)
    {
        Complain::where('id', $id)->delete();

        return redirect()->route('admin.complain.index')->with('message', 'Successfully complain deleted...');
    }
}
