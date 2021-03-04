@extends('layouts.admin')

@section('content')
    <div class="my-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h1 class="text-theme border-bottom pb-3 mb-4">Complain</h1>

                <div class="table-responsive">
                    <table class="table table-hover table-sm text-center">
                        <tr>
                            <th>Name</th>
                            <td>{{$complain->first_name}} {{$complain->last_name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$complain->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$complain->phone}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{$complain->message}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
