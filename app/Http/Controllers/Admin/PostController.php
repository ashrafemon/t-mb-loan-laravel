<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Loan;
use App\Models\Post;
use Illuminate\Support\Str;
use Image;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $loans = Loan::all();
        return view('admin.post.create', compact('loans'));
    }

    public function store()
    {
        $data = request()->validate([
            'loan_id' => 'required',
            'title' => 'required|min: 5',
            'sub_title' => 'required|min: 5',
            'description' => 'required',
            'image' => 'required|image',
            'isDisplay' => 'required'
        ]);

        $post = new Post();

        $post_slug = Str::slug(request('title')) . '-' . time();

        $post->title = request('title');
        $post->slug = $post_slug;
        $post->sub_title = request('sub_title');
        $post->loan_id = request('loan_id');
        $post->description = request('description');
        $post->icon = request('icon');
        $post->isDisplay = request('isDisplay');

        $image = request()->file('image');

        if ($image) {
            $image_name = "assets/images/posts/" . $post_slug . '.jpg';

            if (!file_exists("assets/images/posts")) {
                $dir = mkdir("assets/images/posts");
            }

            Image::make($image)->resize(1366, 768)->save($image_name, 50);
            $post->image = $image_name;
        }

        $post->save();

        return redirect()->route('admin.post.create')->with('message', 'Successfully added post...');
    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->first();
        $loans = Loan::all();
        return view('admin.post.edit', compact('loans', 'post'));
    }

    public function update($id)
    {
        $post = Post::where('id', $id)->first();

        $data = request()->validate([
            'loan_id' => 'required',
            'title' => 'required|min: 5',
            'sub_title' => 'required|min: 5',
            'description' => 'required',
            'image' => 'image',
            'isDisplay' => 'required'
        ]);

        $post_slug = Str::slug(request('title')) . '-' . time();

        $post->title = request('title');
        $post->slug = $post_slug;
        $post->sub_title = request('sub_title');
        $post->loan_id = request('loan_id');
        $post->description = request('description');
        $post->icon = request('icon');
        $post->isDisplay = request('isDisplay');
        $post->status = request('status');

        $image = request()->file('image');

        if ($image) {
            $image_name = "assets/images/posts/" . $post_slug . '.jpg';

            if (!file_exists("assets/images/posts")) {
                $dir = mkdir("assets/images/posts");
            }

            Image::make($image)->resize(1366, 768)->save($image_name, 50);
            $post->image = $image_name;
        }

        $post->update();

        return redirect()->back()->with('message', 'Successfully updated post...');
    }

    public function delete($id)
    {
        Post::where('id', $id)->delete();

        return redirect()->route('admin.post.index')->with('message', 'Successfully deleted post...');
    }
}
