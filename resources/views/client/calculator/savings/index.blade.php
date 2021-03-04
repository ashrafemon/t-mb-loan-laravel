@extends('layouts.client')

@section('content')
    <div class="calculate_container py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 col-md-10 col-12">
                    <div class="calculate_header">
                        <h1>Home loan savings calculator</h1>
                        <h4 class="mb-3">Need help saving for your home loan deposit?</h4>
                        <p>See what you could save by making regular deposits into a high interest account. Use the budget
                            planner first if you’re not sure how much you can deposit.</p>
                    </div>

                    <div class="card border-0 saving_calculate_card">
                        <div class="card-header">
                            <h3 class="mb-0">Savings</h3>
                        </div>
                        <div class="card-body">
                            <div class="saving_account mb-2">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-2">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                <p class="mb-0">Loan term</p>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12 mb-lg-0">
                                                <select class="form-control">
                                                    <option value="">Annually</option>
                                                    <option value="">Monthly</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                <p class="mb-0">Periodic payment</p>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input class="form-control" type="text"/>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0">
                                                <select class="form-control">
                                                    <option value="">Annually</option>
                                                    <option value="">Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                                <p class="mb-0">Initial deposit</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 mb-lg-0">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input class="form-control" type="text"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                                <p class="mb-0">Interest rate</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12 mb-lg-0">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input class="form-control" type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="saving_calculate">
                                <div class="row justify-content-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <button class="btn btn-theme btn-block">Calculate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 saving_result_card">
                        <div class="card-header bg-theme">
                            <h3 class="mb-0 text-white">Results</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    Chart
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-borderless">
                                            <tr>
                                                <td colspan="2">
                                                    <h5>Your Savings</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Total amount saved</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5>$563,000</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Amount deposited</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5>$2,152.05</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Total interest</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5>$211,736.40</h5>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('partials.client.contact')
@endsection
