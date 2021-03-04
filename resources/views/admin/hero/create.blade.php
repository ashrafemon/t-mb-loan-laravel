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

                    <form action="{{route('admin.hero.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="name">Page Name</label>
                            <select name="name" id="name" class="form-control">
                                <option selected disabled>Select Page</option>
                                <option value="Home">Home</option>
                                <option value="Why">Why us</option>
                                <option value="Touch">Get in Touch</option>
                            </select>

                            @error('name')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_title">Title</label>
                            <input type="text" class="form-control" id="hero_title" name="hero_title"
                                   placeholder="Hero Title" value="{{old('hero_title')}}"/>
                            @error('hero_title')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_desc">Description</label>
                            <textarea name="hero_desc" id="hero_desc"
                                      class="form-control">{{old('hero_desc')}}</textarea>
                            @error('hero_desc')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hero_image">Hero Image</label>
                            <input type="file" class="form-control-file" name="hero_image" id="hero_image"/>

                            @error('hero_image')
                            <span class="text-danger small">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-block">Add Banner</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
