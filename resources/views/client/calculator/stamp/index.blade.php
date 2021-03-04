@extends('layouts.client')

@section('content')
    <div class="calculate_container py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 col-md-10 col-12">
                    <div class="calculate_header">
                        <h1>Home loan stamp duty calculator</h1>
                        <h4 class="mb-3">We'll help you figure out exactly what you have to pay</h4>
                        <p>Stamp duty can add a big chunk to a property’s cost. The charges can vary depending on which
                            state or territory you live in, as well as the property’s value.</p>
                    </div>

                    <div class="card border-0 stamp_calculate_card">
                        <div class="card-header">
                            <h3 class="mb-0">Stamp Duty Calculator</h3>
                        </div>
                        <div class="card-body">
                            <div class="stamp_account mb-2">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-2">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                <p class="mb-0">Property value</p>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input class="form-control" type="text"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                <p class="mb-0">State or Territory</p>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <select class="form-control">
                                                    <option value="">Annually</option>
                                                    <option value="">Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                <p class="mb-0">Property type</p>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <select class="form-control">
                                                    <option value="">Annually</option>
                                                    <option value="">Monthly</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                <p class="mb-0">Are you a First Home Buyer?</p>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <select class="form-control">
                                                    <option value="">Annually</option>
                                                    <option value="">Monthly</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="stamp_calculate">
                                <div class="row justify-content-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <button class="btn btn-theme btn-block">Calculate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 stamp_result_card">
                        <div class="card-header bg-theme">
                            <h3 class="mb-0 text-white">Results</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <h5 class="mb-4">Extra Information</h5>

                                    <div class="mb-3">
                                        <h5>Home Builder Grant</h5>
                                        <p>HomeBuilder will provide eligible owner-occupiers (including first home buyers)
                                            with
                                            a grant of $25,000 to build a new home or substantially renovate an existing
                                            home
                                            where the contract is signed between 4 June 2020 and 31 December 2020.
                                            Construction
                                            must commence within three months of the contract date.</p>

                                        <p>See this fact sheet for detailed information.</p>
                                    </div>

                                    <div class="mb-3">
                                        <h5>First Home Buyers Assistance</h5>
                                        <h6>First Home Buyers Assistance scheme.</h6>
                                        <p>First home buyers will not have to pay duty for both new and existing homes for
                                            properties up to $650,000. The duty will be reduced for amounts between $650,000
                                            and $800,000. There is no change to the cap for vacant land.</p>
                                        <p>More information here</p>
                                    </div>

                                    <div class="mb-3">
                                        <h5>First Home Owner Grant (New Homes).</h5>
                                        <p class="small">First home owners can access a $10,000 grant for:</p>
                                        <ul class="default-nav small">
                                            <li>
                                                building a new home under a home building contract where the contract price,
                                                when added with the land value, does not exceed $750,000
                                            </li>
                                            <li>
                                                a new home being built by an owner builder where the value of the land and
                                                building does not exceed $750,000 or
                                            </li>
                                            <li>
                                                purchasing a new home worth up to $600,000.
                                            </li>
                                        </ul>
                                        <p class="small">More information here</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="table-responsive mb-3">
                                        <table class="table table-sm table-borderless">
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Stamp duty on property</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5>$563,000</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Transfer fee</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5>$2,152.05</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Mortgage registration fee</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5>$211,736.40</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Total fees</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5>$211,736.40</h5>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div>
                                        <h5 class="mb-3">State / Territorial Revenue Web Sites</h5>
                                        <div class="row justify-content-center">
                                            <div class="col-md-3 col-6 mb-3">
                                                <button class="btn btn-theme btn-block">ACT</button>
                                            </div>
                                            <div class="col-md-3 col-6 mb-3">
                                                <button class="btn btn-theme btn-block">ACT</button>
                                            </div>
                                            <div class="col-md-3 col-6 mb-3">
                                                <button class="btn btn-theme btn-block">ACT</button>
                                            </div>
                                            <div class="col-md-3 col-6 mb-3">
                                                <button class="btn btn-theme btn-block">ACT</button>
                                            </div>
                                            <div class="col-md-3 col-6 mb-3">
                                                <button class="btn btn-theme btn-block">ACT</button>
                                            </div>
                                            <div class="col-md-3 col-6 mb-3">
                                                <button class="btn btn-theme btn-block">ACT</button>
                                            </div>
                                            <div class="col-md-3 col-6 mb-3">
                                                <button class="btn btn-theme btn-block">ACT</button>
                                            </div>
                                            <div class="col-md-3 col-6 mb-3">
                                                <button class="btn btn-theme btn-block">ACT</button>
                                            </div>
                                        </div>
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
