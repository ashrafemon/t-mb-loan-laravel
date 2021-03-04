@extends('layouts.client')

@section('content')
    <div class="calculate_container py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10 col-md-10 col-12">
                    <div class="calculate_header">
                        <h1>Home loan borrowing power calculator</h1>
                        <p>Enter some basic information and our home loan borrowing calculator could give you an idea of
                            how
                            much you can borrow and what your monthly mortgage repayments might look like.</p>
                    </div>

                    <div class="card border-0 borrow_calculate_card">
                        <div class="card-header">
                            <h3 class="mb-0">How Much Can I Borrow?</h3>
                        </div>
                        <div class="card-body">
                            <div class="borrow_basic pb-2 mb-3">
                                <div class="row align-items-center mb-2">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <p class="mb-0">Loan term</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <select id="loan_term" class="form-control"></select>
                                    </div>
                                </div>

                                <div class="row align-items-center mb-2">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <p class="mb-0">Interest rate</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">%</span>
                                            </div>
                                            <input id="interest_rate" class="form-control" type="text" value="2.25"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mb-2">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <p class="mb-0">Application type</p>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-12">
                                        <select id="application_type" class="form-control">
                                            <option value="single">Single</option>
                                            <option value="joint">Joint</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="borrow_account mb-2">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="borrow_account_income">
                                            <h5>Income</h5>

                                            <div id="singleWrapper" class="row align-items-center mb-3">
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <p class="mb-0">Gross income 1</p>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input id="income_1" value="0" class="form-control"
                                                               type="text"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <select id="income_type_1" class="form-control">
                                                        <option value="annually">Annually</option>
                                                        <option value="fortnightly">Fortnightly</option>
                                                        <option value="monthly">Monthly</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div id="jointWrapper" class="d-none">
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                        <p class="mb-0">Gross income 2</p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input id="income_2" value="0" class="form-control"
                                                                   type="text"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                        <select id="income_type_2" class="form-control">
                                                            <option value="annually">Annually</option>
                                                            <option value="fortnightly">Fortnightly</option>
                                                            <option value="monthly">Monthly</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <p class="mb-0">Untaxed income</p>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input id="untaxed_income" value="0" class="form-control"
                                                               type="text"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <select id="untaxed_type" class="form-control">
                                                        <option value="annually">Annually</option>
                                                        <option value="fortnightly">Fortnightly</option>
                                                        <option value="monthly">Monthly</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <p class="mb-0">Rental income</p>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input id="rental_income" value="0" class="form-control"
                                                               type="text"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <select id="rental_type" class="form-control">
                                                        <option value="annually">Annually</option>
                                                        <option value="fortnightly">Fortnightly</option>
                                                        <option value="monthly">Monthly</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="borrow_account_expense">
                                            <h5>Expenses</h5>

                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <p class="mb-0">Other loans</p>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input id="other_loan" value="0" class="form-control"
                                                               type="text"/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <select id="other_loan_type" class="form-control">
                                                        <option value="weekly">Weekly</option>
                                                        <option value="fortnightly">Fortnightly</option>
                                                        <option value="monthly" selected>Monthly</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <p class="mb-0">Car repayments</p>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input id="car_repayment" value="0" class="form-control"
                                                               type="text"/>
                                                    </div>
                                                    <span class="small">Car loan repayments per month</span>
                                                </div>
                                            </div>

                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <p class="mb-0">Total credit card limit</p>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input id="card_limit" value="0" class="form-control"
                                                               type="text"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row align-items-center mb-3">
                                                <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <p class="mb-0">Number of dependants</p>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-12 mb-lg-0 mb-md-0 mb-3">
                                                    <input id="child_number" value="0" class="form-control"
                                                           type="text"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="borrow_calculate">
                                <div class="row justify-content-end">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <button class="btn btn-theme btn-block" id="borrowCalculateBtn">Calculate
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 borrow_result_card">
                        <div class="card-header bg-theme">
                            <h3 class="mb-0 text-white">Result</h3>
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
                                                    <h5>Borrowing Details</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">You may borrow (approx.):</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5 id="borrow_property_result">$</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Monthly repayments:</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5 id="monthly_payable_result">$</h5>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-0">Total interest payable:</p>
                                                </td>
                                                <td class="text-right">
                                                    <h5 id="total_amount_result">$</h5>
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


@push('custom-js')
    <script>
        $(document).ready(function () {
            // Loan Term Data
            for (let i = 1; i <= 30; i++) {
                $('#loan_term').append(`
                    <option value="${i}">${i} year${i > 1 ? 's' : ''}</option>
                `)
            }

            function borrowCalculation() {
                console.log('0');
            }

            let loan_term = $('#loan_term').val();
            let interest_rate = $('#interest_rate').val();
            let application_type = $('#application_type').val();

            let income_1 = $('#income_1').val();
            let income_type_1 = $('#income_type_1').val();

            let income_2 = $('#income_2').val();
            let income_type_2 = $('#income_type_2').val();

            let untaxed = $('#untaxed_income').val();
            let untaxed_type = $('#untaxed_type').val();

            let rental = $('#rental_income').val()
            let rental_type = $('#rental_type').val();

            let other_loan = $('#other_loan').val();
            let other_loan_type = $('#other_loan_type').val();

            let car_repayment = $('#car_repayment').val();
            let card_limit = $('#card_limit').val()
            let child_number = $('#child_number').val()

            let annualIncome1 = 0
            let annualIncome2 = 0
            let annualUntaxedIncome = 0
            let annualRentalIncome = 0
            let annualOtherLoan = 0
            let annualCarRepayment = 0
            let annualCardInterest = 0
            let annualDependentExpense = 0

            let totalIncome = 0;
            let totalExpense = 0;

            let allTotal = 0;
            let propertyPrice = 0;
            let monthlyPayable = 0;

            $('#loan_term').change(function (e) {
                loan_term = e.target.value
            })

            $('#interest_rate').change(function (e) {
                interest_rate = e.target.value
            })

            $('#application_type').change(function (e) {
                application_type = e.target.value

                if (application_type === 'joint') {
                    $('#jointWrapper').removeClass('d-none');
                } else {
                    $('#jointWrapper').addClass('d-none');
                }
            })

            // Income Section
            $('#income_1').change(function (e) {
                income_1 = e.target.value
            })
            $('#income_type_1').change(function (e) {
                income_type_1 = e.target.value
            })

            $('#income_2').change(function (e) {
                income_2 = e.target.value
            })
            $('#income_type_2').change(function (e) {
                income_type_2 = e.target.value
            })

            $('#untaxed_income').change(function (e) {
                untaxed = e.target.value
            })
            $('#untaxed_type').change(function (e) {
                untaxed_type = e.target.value
            })

            // Expense Section
            $('#other_loan').change(function (e) {
                other_loan = e.target.value
            })
            $('#other_loan_type').change(function (e) {
                other_loan_type = e.target.value
            })

            $('#car_repayment').change(function (e) {
                car_repayment = e.target.value
            })

            $('#card_limit').change(function (e) {
                card_limit = e.target.value
            })

            $('#child_number').change(function (e) {
                child_number = e.target.value
            })

            $('#borrowCalculateBtn').click(function () {
                // Income Convert in Annual
                annualIncome1 = convertAnnualIncome(income_1, income_type_1);
                if (application_type === 'joint') {
                    annualIncome2 = convertAnnualIncome(income_2, income_type_2);
                }
                annualUntaxedIncome = convertAnnualIncome(untaxed, untaxed_type)
                annualRentalIncome = convertAnnualIncome(rental, rental_type)

                // Total Income
                if (application_type === 'joint') {
                    totalIncome = annualIncome1 + annualIncome2 + annualUntaxedIncome + annualRentalIncome;
                } else {
                    totalIncome = annualIncome1 + annualUntaxedIncome + annualRentalIncome;
                }

                // Expense Covert in Annual
                annualOtherLoan = convertAnnualIncome(other_loan, other_loan_type);
                annualCarRepayment = convertAnnualIncome(car_repayment, 'monthly');
                annualCardInterest = covertCreditCardLimit(card_limit);

                if (application_type === 'joint') {
                    // let totalDependent = 2 + child_number;
                    let parentExpense = 2533;
                    let childExpense = child_number * 397;
                    annualDependentExpense = parentExpense + childExpense
                } else {
                    // let totalDependent = 1 + child_number;
                    let parentExpense = 1418;
                    let childExpense = child_number * 397;
                    annualDependentExpense = parentExpense + childExpense
                }

                totalExpense = annualOtherLoan + annualCarRepayment + annualCardInterest + annualDependentExpense

                allTotal = totalIncome - totalExpense;

                if (allTotal > 0) {
                    propertyPrice = Math.floor(allTotal / (1 + (interest_rate * loan_term)))
                    monthlyPayable = allTotal / (12 * loan_term)

                    $('#total_amount_result').text('$' + allTotal);
                    $('#borrow_property_result').text('$' + propertyPrice);
                    $('#monthly_payable_result').text('$' + monthlyPayable.toFixed(2));
                } else {
                    $('#total_amount_result').text('$0');
                    $('#borrow_property_result').text('$0');
                    $('#monthly_payable_result').text('$0');
                }
            })


            function convertAnnualIncome(income, type) {
                if (type === 'annually') {
                    return income * 1
                } else if (type === 'fortnightly') {
                    return income * 26
                } else if (type === 'monthly') {
                    return income * 12
                } else if (type === 'weekly') {
                    return income * 52
                }
            }

            function covertCreditCardLimit(amount) {
                return (amount * 3) / 100;
            }
        })
    </script>
@endpush
