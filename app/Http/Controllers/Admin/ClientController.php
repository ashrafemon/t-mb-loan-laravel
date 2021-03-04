<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Support\Str;
use Image;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::paginate(10);
        return view('admin.client.index', compact('clients'));
    }

    public function create()
    {
        return view('admin.client.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'logo' => 'required|image',
        ]);

        $client = new Client();

        $client->name = request('name');
        $client->phone = request('phone');

        $logo = request()->file('logo');

        if ($logo) {
            $logo_name = "assets/images/client/" . Str::slug(request('name')) . '-' . time() . '.png';

            if (!file_exists("assets/images/client")) {
                $dir = mkdir("assets/images/client");
            }

            Image::make($logo)->save($logo_name, 50);
            $client->logo = $logo_name;
        }

        $client->save();

        return redirect()->route('admin.client.create')->with('message', 'Successfully client added...');
    }

    public function edit($id)
    {
        $client = Client::where('id', $id)->first();
        return view('admin.client.edit', compact('client'));
    }

    public function update($id)
    {
        $client = Client::where('id', $id)->first();

        $data = request()->validate([
            'name' => 'required',
            'logo' => 'image',
        ]);

        $client->name = request('name');
        $client->phone = request('phone');

        $logo = request()->file('logo');

        if ($logo) {
            $logo_name = "assets/images/client/" . Str::slug(request('name')) . '-' . time() . '.png';

            if (!file_exists("assets/images/client")) {
                $dir = mkdir("assets/images/client");
            }

            Image::make($logo)->save($logo_name, 50);
            $client->logo = $logo_name;
        }

        $client->update();

        return redirect()->back()->with('message', 'Successfully client updated...');
    }

    public function delete($id)
    {
        Client::where('id', $id)->delete();

        return redirect()->route('admin.client.index')->with('message', 'Successfully client deleted...');
    }
}
