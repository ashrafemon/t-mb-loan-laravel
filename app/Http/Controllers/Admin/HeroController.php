<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Support\Str;
use Image;

class HeroController extends Controller
{
    public function index()
    {
        $heros = Hero::all();
        return view('admin.hero.index', compact('heros'));
    }

    public function create()
    {
        return view('admin.hero.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'hero_title' => 'required|min:10',
            'hero_desc' => 'required|min:10',
            'hero_image' => 'required|image',
        ]);

        $hero = new Hero();

        $hero->name = request('name');
        $hero->hero_title = request('hero_title');
        $hero->hero_desc = request('hero_desc');

        $hero_image = request()->file('hero_image');

        if ($hero_image) {
            $hero_image_name = "assets/images/hero/" . Str::slug(request('name')) . '-' . time() . '.png';

            if (!file_exists("assets/images/hero")) {
                $dir = mkdir("assets/images/hero");
            }

            Image::make($hero_image)->resize(1366, 768)->save($hero_image_name, 50);
            $hero->hero_image = $hero_image_name;
        }

        $hero->save();

        return redirect()->route('admin.hero.create')->with('message', 'Successfully added hero...');
    }

    public function edit($id)
    {
        $hero = Hero::where('id', $id)->first();
        return view('admin.hero.edit', compact('hero'));
    }

    public function update($id)
    {
        $hero = Hero::where('id', $id)->first();

        $data = request()->validate([
            'name' => 'required',
            'hero_title' => 'required|min:10',
            'hero_desc' => 'required|min:10',
            'hero_image' => 'image',
        ]);

        $hero->name = request('name');
        $hero->hero_title = request('hero_title');
        $hero->hero_desc = request('hero_desc');

        $hero_image = request()->file('hero_image');

        if ($hero_image) {
            $hero_image_name = "assets/images/hero/" . Str::slug(request('name')) . '-' . time() . '.png';

            if (!file_exists("assets/images/hero")) {
                $dir = mkdir("assets/images/hero");
            }

            Image::make($hero_image)->resize(1366, 768)->save($hero_image_name, 50);
            $hero->hero_image = $hero_image_name;
        }

        $hero->update();

        return redirect()->back()->with('message', 'Successfully updated hero...');
    }

    public function delete($id)
    {
        Hero::where('id', $id)->delete();

        return redirect()->route('admin.hero.index')->with('message', 'Successfully deleted hero...');
    }
}
