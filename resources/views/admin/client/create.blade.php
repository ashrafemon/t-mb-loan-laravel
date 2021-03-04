@extends('layouts.admin')

@section('content')
    <div class="my-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h1 class="text-theme border-bottom pb-3 mb-3">Client</h1>

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

                        <form action="{{route('admin.client.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{old('name')}}"/>
                                @error('name')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="logo">Logo</label>
                                <input type="file" class="form-control-file" name="logo" id="logo"/>
                                @error('logo')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       value="{{old('phone')}}"/>
                                @error('phone')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Add Client</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
