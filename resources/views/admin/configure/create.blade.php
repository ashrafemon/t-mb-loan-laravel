@extends('layouts.admin')

@section('content')
    <div class="my-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h1 class="text-theme border-bottom pb-3 mb-3">Configure</h1>

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

                        <form action="{{route('admin.configure.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST')

                            <div class="form-group">
                                <label for="site_name">Site Name</label>
                                <input type="text" class="form-control" name="site_name" id="site_name"
                                       value="{{old('site_name')}}"/>
                                @error('site_name')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="site_logo">Site Logo</label>
                                <input type="file" class="form-control-file" name="site_logo" id="site_logo"/>
                                @error('site_logo')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="copyright">Copyright</label>
                                <input type="text" class="form-control" name="copyright" id="copyright"
                                       value="{{old('copyright')}}"/>
                                @error('copyright')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="mail_receiver">Mail Receiver ID</label>
                                <input type="email" class="form-control" name="mail_receiver" id="mail_receiver"
                                       placeholder="Enter a valid email address" value="{{old('mail_receiver')}}"/>
                                @error('mail_receiver')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="contact_number">Contact Number</label>
                                <input type="text" class="form-control" name="contact_number" id="contact_number"
                                       placeholder="Contact number" value="{{old('contact_number')}}"/>
                                @error('contact_number')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="fb_link">Facebook Link</label>
                                <input type="text" class="form-control" name="fb_link" id="fb_link"
                                       placeholder="Facebook Page Link" value="{{old('fb_link')}}"/>
                                @error('fb_link')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label for="meta_desc">Meta Description</label>
                                <textarea id="meta_desc" name="meta_desc" class="form-control">{{old('meta_desc')}}</textarea>
                                @error('meta_desc')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="clients_title">Why Page Clients Title</label>
                                <input type="text" class="form-control" name="clients_title" id="clients_title"
                                       placeholder="Enter clients title" value="{{old('clients_title')}}"/>
                                @error('clients_title')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>

                            {{--                            <div class="form-group">--}}
                            {{--                                <label for="complain">Complain Function</label>--}}
                            {{--                                <select name="complain" id="complain" class="form-control">--}}
                            {{--                                    <option selected disabled>Select Complain State</option>--}}
                            {{--                                    <option value="1">Active</option>--}}
                            {{--                                    <option value="0">In-Active</option>--}}
                            {{--                                </select>--}}
                            {{--                                @error('complain')--}}
                            {{--                                <span class="text-danger small">{{$message}}</span>--}}
                            {{--                                @enderror--}}
                            {{--                            </div>--}}

                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Set Configure</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
