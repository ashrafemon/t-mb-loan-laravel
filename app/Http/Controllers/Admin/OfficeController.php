<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::paginate(10);
        return view('admin.office.index', compact('offices'));
    }

    public function create()
    {
        return view('admin.office.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'number' => 'required',
        ]);

        $office = new Office();

        $office->name = request('name');
        $office->address = request('address');
        $office->number = request('number');

        $office->save();

        return redirect()->route('admin.office.create')->with('message', 'Successfully office added...');
    }

    public function edit($id)
    {
        $office = Office::where('id', $id)->first();
        return view('admin.office.edit', compact('office'));
    }

    public function update($id)
    {
        $office = Office::where('id', $id)->first();

        $data = request()->validate([
            'name' => 'required',
            'address' => 'required',
            'number' => 'required',
        ]);

        $office->name = request('name');
        $office->address = request('address');
        $office->number = request('number');

        $office->update();

        return redirect()->back()->with('message', 'Successfully office updated...');
    }

    public function delete($id)
    {
        Office::where('id', $id)->delete();

        return redirect()->route('admin.office.index')->with('message', 'Successfully office deleted...');
    }
}
