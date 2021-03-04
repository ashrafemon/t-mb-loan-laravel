<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use Illuminate\Support\Str;
use Image;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::paginate(10);
        return view('admin.loan.index', compact('loans'));
    }

    public function create()
    {
        return view('admin.loan.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'hero_image' => 'required|image'
        ]);

        $loan = new Loan();

        $slug = Str::slug(request('name'));

        $loan->name = request('name');
        $loan->title = request('title');
        $loan->slug = $slug;
        $loan->description = request('description');
        $loan->hero_title = request('hero_title');
        $loan->hero_desc = request('hero_desc');

        $hero_image = request()->file('hero_image');

        if ($hero_image) {
            $hero_image_name = "assets/images/loan/" . $slug . '-' . time() . '.png';

            if (!file_exists("assets/images/loan")) {
                $dir = mkdir("assets/images/loan");
            }

            Image::make($hero_image)->resize(1366, 768)->save($hero_image_name, 50);
            $loan->hero_image = $hero_image_name;
        }

        $loan->save();

        return redirect()->route('admin.loan.create')->with('message', 'Successfully loan added...');
    }

    public function edit($id)
    {
        $loan = Loan::where('id', $id)->first();
        return view('admin.loan.edit', compact('loan'));
    }

    public function update($id)
    {
        $loan = Loan::where('id', $id)->first();

        $data = request()->validate([
            'name' => 'required|string',
            'hero_image' => 'image'
        ]);

        $slug = Str::slug(request('name'));

        $loan->name = request('name');
        $loan->title = request('title');
        $loan->slug = $slug;
        $loan->description = request('description');
        $loan->hero_title = request('hero_title');
        $loan->hero_desc = request('hero_desc');

        $hero_image = request()->file('hero_image');

        if ($hero_image) {
            $hero_image_name = "assets/images/loan/" . $slug . '-' . time() . '.png';

            if (!file_exists("assets/images/loan")) {
                $dir = mkdir("assets/images/loan");
            }

            Image::make($hero_image)->resize(1366, 768)->save($hero_image_name, 50);
            $loan->hero_image = $hero_image_name;
        }

        $loan->update();

        return redirect()->back()->with('message', 'Successfully loan updated...');
    }

    public function delete($id)
    {
        Loan::where('id', $id)->delete();

        return redirect()->route('admin.loan.index')->with('message', 'Successfully deleted loan...');
    }
}
