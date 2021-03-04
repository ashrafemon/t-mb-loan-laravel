@extends('layouts.admin')

@section('content')
    <div class="my-3">
        <div class="card border-0 shadow">
            <div class="card-body">
                <h1 class="text-theme border-bottom pb-3 mb-4">Dashboard</h1>

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mb-4">
                        <div class="card bg-primary border-0">
                            <div class="card-body text-white">
                                <h4>Clients</h4>
                                <h1>{{count($clients)}}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mb-4">
                        <div class="card bg-dark border-0">
                            <div class="card-body text-white">
                                <h4>Offices</h4>
                                <h1>{{count($offices)}}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mb-4">
                        <div class="card bg-danger border-0">
                            <div class="card-body text-white">
                                <h4>Complains</h4>
                                <h1>{{count($complains)}}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mb-4">
                        <div class="card bg-success border-0">
                            <div class="card-body text-white">
                                <h4>Posts</h4>
                                <h1>{{count($posts)}}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mb-4">
                        <div class="card bg-warning border-0">
                            <div class="card-body text-white">
                                <h4>Loans</h4>
                                <h1>{{count($loans)}}</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12 mb-4">
                        <div class="card bg-info border-0">
                            <div class="card-body text-white">
                                <h4>Appointments</h4>
                                <h1>{{count($appointments)}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
