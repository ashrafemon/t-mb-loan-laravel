@extends('layouts.admin')

@section('content')
    <div class="card border-0 shadow my-3">
        <div class="card-body">
            <h1 class="text-theme border-bottom pb-3 mb-3">Static Page Banner</h1>

            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 col-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong class="error_msg">
                                {{Session::get('message')}}
                            </strong>
                        </div>
                    @endif

                    <form action="{{route('admin.hero.update', $hero->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">Page Name</label>
                            <select name="name" id="name" class="form-control">
                                <option selected disabled>Select Page</option>
                                <option {{$hero->name == 'Home' ? 'selected' : ''}} value="Home">Home</option>
                                <option {{$hero->name == 'Why' ? 'selected' : ''}} value="Why">Why us</option>
                                <option {{$hero->name == 'Touch' ? 'selected' : ''}} value="Touch">Get in Touch</option>
                            </select>

                            @error('name')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_title">Title</label>
                            <input type="text" class="form-control" id="hero_title" name="hero_title"
                                   placeholder="Hero Title" value="{{$hero->hero_title ?? old('hero_title')}}"/>
                            @error('hero_title')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_desc">Description</label>
                            <textarea name="hero_desc" id="hero_desc"
                                      class="form-control">{{$hero->hero_desc ?? old('hero_desc')}}</textarea>
                            @error('hero_desc')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_image">Hero Image</label>
                            <div class="mb-3" style="width: 200px">
                                <img src="{{asset($hero->hero_image)}}" class="img-fluid" alt="{{$hero->hero_title}}"/>
                            </div>
                            <input type="file" class="form-control-file" name="hero_image" id="hero_image"/>

                            @error('hero_image')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Update Banner</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
