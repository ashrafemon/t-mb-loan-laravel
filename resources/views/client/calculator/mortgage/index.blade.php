@extends('layouts.client')

@section('content')
    <div class="calculate_container py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 col-md-10 col-12">
                    <div class="calculate_header">
                        <h1>Calculate your mortgage repayments</h1>
                        <p>We'll help you understand your options and take the hassle out of number crunching. Calculate
                            your estimated home loan repayments and see how much interest you could pay over the life of
                            your loan.</p>
                    </div>

                    <div class="card border-0 shadow mortgage_card">
                        <div class="card-body py-5">
                            <p>Mortgage repayments</p>
                            <h1>Here's how Aussie can help you</h1>
                            <div class="row align-items-center">
                                <div class="col-lg-auto col-md-auto col-12 mb-lg-0 mb-md-0 mb-1">
                                    <h2>I'm looking to buy</h2>
                                </div>
                                <div class="col-lg col-md col-12 mb-lg-0 mb-md-0 mb-3">
                                    <select class="form-control">
                                        <option disabled selected>Select One</option>
                                        <option value="">a house</option>
                                        <option value="">an apartment</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <h2>in</h2>
                                </div>
                                <div class="col">
                                    <input class="form-control" placeholder="enter suburb" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mortgage_calculator_wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                <div class="mortgage_calculator">
                                    <div class="item">
                                        <h5>Median property price of suburb selected* (based on current data)</h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">$</span>
                                            </div>
                                            <input id="property_price" class="form-control" type="text"
                                                   value="350000"/>
                                        </div>

                                        <input id="property_price_ranger"
                                               class="form-control" type="range" min="1000000" max="5000000"
                                               value="350000"/>
                                    </div>

                                    <div class="item">
                                        <h5>Loan term</h5>
                                        <div class="row align-items-center">
                                            <div class="col-lg-6 col-md-6 col-auto">
                                                <label class="form-check-label" for="term_year_25">
                                                    <input name="term_year" id="term_year_25" type="radio" value="25"/>
                                                    25 years
                                                </label>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-auto">
                                                <label class="form-check-label" for="term_year_30">
                                                    <input name="term_year" id="term_year_30" checked type="radio"
                                                           value="30"/>
                                                    30 years
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h5>Interest rate</h5>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-white">%</span>
                                            </div>
                                            <input id="interest_rate" class="form-control" type="text" value="1"/>
                                        </div>

                                        <input id="interest_rate_ranger" min="1" max="5" step="0.01" value="1"
                                               class="form-control"
                                               type="range"/>
                                    </div>

                                    <div class="item">
                                        <h5>Repayment type</h5>
                                        <div>
                                            <label class="form-check-label" for="repayment_type_interest">
                                                <input name="repayment_type" value="interest"
                                                       id="repayment_type_interest" type="radio"/>
                                                Interest only
                                            </label>
                                        </div>
                                        <div>
                                            <label class="form-check-label" for="repayment_type_principal_interest">
                                                <input name="repayment_type" value="interest_principal"
                                                       id="repayment_type_principal_interest"
                                                       type="radio" checked/> Principal
                                                and interest
                                            </label>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <h5>Repayment frequency</h5>
                                        <div>
                                            <select id="repayment_frequency" class="form-control">
                                                <option value="monthly">monthly</option>
                                                <option value="fortnightly">fortnightly</option>
                                                <option value="weekly">weekly</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="mortgage_result">
                                    <div class="item">
                                        <h2>Your <span id="result_repayment_frequency">monthly</span> repayments</h2>
                                        <h3>
                                            $<span id="result_payment">402.44</span>
                                            <span class="smallFont">at</span>
                                            <span id="result_interest_rate">2.64%</span>
                                        </h3>
                                    </div>

                                    <div class="item">
                                        <h4>What if your rate goes up?</h4>
                                        <p>If the interest rate goes up another</p>
                                        <p><span class="h2 bigFont">0.5%</span> your monthly repayments would</p>
                                        <p>be <span class="h2 bigFont">$428.42</span></p>
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

@push('custom-js')
    <script>

        $(document).ready(function () {
            let property_price = 0;
            let interest_rate = 0;
            let term_year = 0;
            let repayment_type = '';
            let frequency = '';

            function mortgageCalculation(price, interest, duration, type, frequency) {
                let allTotal = 0;
                let interestRate = interest / 100;
                let pay = 0

                allTotal = price * (1 + interestRate * duration)

                if (type === 'interest') {
                    allTotal = allTotal - price
                }

                if (frequency === 'monthly') {
                    pay = allTotal / (12 * duration);
                } else if (frequency === 'fortnightly') {
                    pay = allTotal / (26 * duration);
                } else if (frequency === 'weekly') {
                    pay = allTotal / (52 * duration);
                }

                pay = pay.toFixed(2)

                $('#result_repayment_frequency').text(frequency);
                $('#result_payment').text(pay);
                $('#result_interest_rate').text(interest + '%');
            }


            property_price = $('#property_price').val()
            interest_rate = $('#interest_rate').val()
            term_year = 0;
            repayment_type = '';
            frequency = $('#repayment_frequency').val()


            $('#property_price_ranger').val(property_price)
            $('#interest_rate_ranger').val(interest_rate)


            $('input[name="term_year"]').each(function () {
                if ($(this).prop('checked') === true) {
                    term_year = $(this).val()
                }
            })

            $('input[name="repayment_type"]').each(function () {
                if ($(this).prop('checked') === true) {
                    repayment_type = $(this).val()
                }
            })

            mortgageCalculation(property_price, interest_rate, term_year, repayment_type, frequency)


            $('#property_price').change(function (e) {
                if (e.target.value < 1000000) {
                    property_price = 1000000
                    $(this).val(property_price)
                    $('#property_price_ranger').val(property_price)
                }

                if (e.target.value > 5000000) {
                    property_price = 5000000
                    $(this).val(property_price)
                    $('#property_price_ranger').val(property_price)
                }

                property_price = $(this).val()
                $('#property_price_ranger').val(property_price)

                mortgageCalculation(property_price, interest_rate, term_year, repayment_type, frequency)
            })

            $('#property_price_ranger').change(function () {
                property_price = $(this).val()
                $('#property_price').val(property_price)

                mortgageCalculation(property_price, interest_rate, term_year, repayment_type, frequency)
            })

            $('#interest_rate').change(function (e) {
                if (e.target.value < 1) {
                    interest_rate = 1
                    $(this).val(interest_rate)
                    $('#interest_rate_ranger').val(interest_rate)
                }

                if (e.target.value > 5) {
                    interest_rate = 5
                    $(this).val(interest_rate)
                    $('#interest_rate_ranger').val(interest_rate)
                }

                interest_rate = $(this).val()
                $('#interest_rate_ranger').val(interest_rate)

                mortgageCalculation(property_price, interest_rate, term_year, repayment_type, frequency)
            })

            $('#interest_rate_ranger').change(function () {
                interest_rate = $(this).val()
                $('#interest_rate').val(interest_rate)

                mortgageCalculation(property_price, interest_rate, term_year, repayment_type, frequency)
            })

            $('input[name="term_year"]').change(function (e) {
                term_year = e.target.value;

                mortgageCalculation(property_price, interest_rate, term_year, repayment_type, frequency)
            })

            $('input[name="repayment_type"]').change(function (e) {
                repayment_type = e.target.value;

                mortgageCalculation(property_price, interest_rate, term_year, repayment_type, frequency)
            })

            $('#repayment_frequency').change(function (e) {
                frequency = e.target.value

                mortgageCalculation(property_price, interest_rate, term_year, repayment_type, frequency)
            })

        })

    </script>
@endpush
