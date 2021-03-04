@extends('layouts.auth')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="auth_title text-center mb-4">
                            <h3>Home Loan Admin</h3>
                        </div>
                        <div class="auth_content">
                            <form action="{{route('login.create')}}" method="POST">
                                @csrf
                                @method('POST')

                                @if(Session::has('message'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <strong class="error_msg">
                                            {{Session::get('message')}}
                                        </strong>
                                    </div>
                                @endif

                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                           placeholder="Admin Email Address"
                                    />

                                    @error('email')
                                    <span class="text-danger small error_msg">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                           placeholder="Admin Password"/>
                                    @error('password')
                                    <span class="text-danger small error_msg">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-theme btn-block">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
