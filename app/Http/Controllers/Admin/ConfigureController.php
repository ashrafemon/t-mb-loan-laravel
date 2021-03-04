<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Configure;
use Illuminate\Support\Str;
use Image;

class ConfigureController extends Controller
{

    public function create()
    {
        $configure = Configure::first();
        if (!$configure) {
            return view('admin.configure.create');
        } else {
            return redirect()->route('admin.configure.edit');
        }

    }

    public function store()
    {
        $data = request()->validate([
            'site_name' => 'required',
            'site_logo' => 'required|image',
            'copyright' => 'required',
            'mail_receiver' => 'required|email:rfc,dns',
            'contact_number' => 'required',
        ]);

        $configure = new Configure();

        $configure->site_name = request('site_name');
        $configure->copyright = request('copyright');
        $configure->mail_receiver = request('mail_receiver');
        $configure->contact_number = request('contact_number');
        $configure->clients_title = request('clients_title');
        $configure->fb_link = request('fb_link');
        $configure->meta_desc = request('meta_desc');
//        $configure->complain = request('complain');

        $site_logo = request()->file('site_logo');

        if ($site_logo) {
            $site_logo_name = "assets/images/configure/" . Str::slug(request('site_name')) . '-' . time() . '.png';

            if (!file_exists("assets/images/configure")) {
                $dir = mkdir("assets/images/configure");
            }

            Image::make($site_logo)->save($site_logo_name, 100);
            $configure->site_logo = $site_logo_name;
        }

        $configure->save();

        return redirect()->route('admin.configure.edit')->with('message', 'Successfully configure added...');
    }

    public function edit()
    {
        $configure = Configure::first();

        if ($configure) {
            return view('admin.configure.edit', compact('configure'));
        } else {
            return redirect()->route('admin.configure.create');
        }
    }

    public function update($id)
    {
        $configure = Configure::where('id', $id)->first();

        $data = request()->validate([
            'site_name' => 'required',
            'site_logo' => 'image',
            'copyright' => 'required',
            'mail_receiver' => 'required|email',
            'contact_number' => 'required',
        ]);

        $configure->site_name = request('site_name');
        $configure->copyright = request('copyright');
        $configure->mail_receiver = request('mail_receiver');
        $configure->contact_number = request('contact_number');
        $configure->clients_title = request('clients_title');
        $configure->fb_link = request('fb_link');
        $configure->meta_desc = request('meta_desc');
//        $configure->complain = request('complain');

        $site_logo = request()->file('site_logo');

        if ($site_logo) {
            $site_logo_name = "assets/images/configure/" . Str::slug(request('site_name')) . '-' . time() . '.png';

            if (!file_exists("assets/images/configure")) {
                $dir = mkdir("assets/images/configure");
            }

            Image::make($site_logo)->save($site_logo_name, 100);
            $configure->site_logo = $site_logo_name;
        }

        $configure->update();

        return redirect()->route('admin.configure.edit')->with('message', 'Successfully configure updated...');
    }
}
