<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configure;

class WhyController extends Controller
{
    public function edit()
    {
        $configure = Configure::first();

        return view('admin.why.edit', compact('configure'));
    }

    public function update($id)
    {
        $configure = Configure::where('id', $id)->first();

        $data = request()->validate([
            'why_page_content' => 'required'
        ]);

        $configure->why_page_content = request('why_page_content');
        $configure->update();

        return redirect()->back()->with('message', 'Successfully why page content updated...');
    }
}
