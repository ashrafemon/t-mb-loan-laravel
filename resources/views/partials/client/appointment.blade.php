<!--Appointment Dialog-->
<div class="site_dialog">
    <div class="site_modal">
        <div class="modal_close text-right">
            <button class="btn btn-danger btn-sm" id="modal_close_btn">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="modal_content py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 col-12">
                        <h2 class="modal_title text-theme text-center">Great, let’s get you an appointment!</h2>
                        <p class="modal_suggestion text-center">Fill in the form below and we’ll put you in touch with
                            your local <span class="appointment_site_name"></span> Broker. If you’d prefer to speak to
                            someone directly, call us on 1300 44
                            55 66.</p>

                        <form id="appointmentForm">
                            {{--                            @csrf--}}
                            {{--                            @method('POST')--}}
                            <div class="accordion" id="contactFormAccordion">
                                <div class="card border-0">
                                    <div class="collapse show" data-parent="#contactFormAccordion" id="firstPage">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first_name">First Name *</label>
                                                        <input class="form-control" name="first_name" id="first_name"
                                                               placeholder="Enter your first name"
                                                               type="text" value="{{old('first_name')}}"
                                                        />

                                                        @error('first_name')
                                                        <span class="text-theme small">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="last_name">Last Name *</label>
                                                        <input class="form-control" name="last_name" id="last_name"
                                                               placeholder="Enter your last name"
                                                               type="text" value="{{old('last_name')}}"
                                                        />
                                                        @error('last_name')
                                                        <span class="text-theme small">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="contact_number">Contact Number *</label>
                                                        <input class="form-control" name="contact_number"
                                                               id="contact_number"
                                                               placeholder="Enter your phone number"
                                                               type="text" value="{{old('contact_number')}}"
                                                        />
                                                        @error('contact_number')
                                                        <span class="text-theme small">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="email">Email *</label>
                                                        <input class="form-control" name="email" id="email"
                                                               placeholder="Enter your email address"
                                                               type="email" value="{{old('email')}}"
                                                        />
                                                        @error('email')
                                                        <span class="text-theme small">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <button class="btn btn-theme-text" id="firstNextBtn"
                                                    data-target="#secondPage"
                                                    data-toggle="collapse" type="button">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="collapse" data-parent="#contactFormAccordion" id="secondPage">
                                        <div class="card-body">
                                            <h6>Where do you live?</h6>
                                            <div class="row mb-2">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <div class="form-group" id="myForm">
                                                        <label for="address">Suburb *</label>
                                                        <input class="form-control" name="address" id="address"
                                                               placeholder="Suburb"
                                                               data-geocomplete="street address"
                                                               type="text" value="{{old('address')}}"
                                                        />
                                                        @error('address')
                                                        <span class="text-theme small">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                            <h6>What can we help you with?</h6>
                                            <div class="form-group mb-4 loan_type_wrapper">
                                                <label class="d-block mb-3">
                                                    Choose the option or options that best suit you *
                                                </label>

                                                @error('loan_type')
                                                <div class="text-theme small mb-3">{{$message}}</div>
                                                @enderror
                                            </div>

                                            <h6>What best describes your income source?</h6>
                                            <div class="form-group">
                                                <label class="d-block mb-3">Choose the option that best suits you
                                                    *</label>
                                                @error('income_source')
                                                <div class="text-theme small mb-3">{{$message}}</div>
                                                @enderror
                                                <span class="site_check">
                                                    <input id="income_source_employed" name="income_source" type="radio"
                                                           value="employed"/>
                                                    <span>Employed</span>
                                                </span>

                                                <span class="site_check">
                                                    <input id="income_source_self_employed" name="income_source"
                                                           type="radio" value="self_employed"/>
                                                    <span>Self-employed</span>
                                                </span>

                                                <span class="site_check">
                                                    <input id="income_source_other" name="income_source" type="radio"
                                                           value="other"/>
                                                    <span>Other</span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-theme-text" data-target="#firstPage"
                                                    data-toggle="collapse" type="button">
                                                Back
                                            </button>
                                            <button class="btn btn-theme-text" data-target="#thirdPage"
                                                    data-toggle="collapse" type="button">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="collapse" data-parent="#contactFormAccordion" id="thirdPage">
                                        <div class="card-body">
                                            <h6 class="mb-4">Is there anything else you would like us to know?</h6>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="5"
                                                          name="message">{{old('message')}}</textarea>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button class="btn btn-theme-text" data-target="#secondPage"
                                                    data-toggle="collapse" type="button">
                                                Back
                                            </button>
                                            <button id="submitBtn" class="btn btn-theme-text" type="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="toast" data-delay="12000" style="position: absolute; top: 5px; right: 5px;">
        <div class="toast-header">
            <strong class="mr-auto">Appointment Notification</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Hello, world! This is a toast message.
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $("#address").geocomplete({
            componentRestrictions: {
                country: ['au']
            },
        })

        $.ajax({
            url: "{{route('api.loans')}}",
            dataType: 'json',
            method: 'GET',
            success: function (res) {
                res.forEach(item => {
                    $('.loan_type_wrapper').append(`
                    <span class="site_check">
                        <input name="loan_type[]" type="checkbox" value="${item.name}" />
                        <span>${item.name}</span>
                    </span>
                `)
                })

                $(".site_check input[type='checkbox']").click(function () {
                    if ($(this).prop('checked') === true) {
                        $(this).parent().css({
                            'background': 'rgba(144, 10, 34, 1)',
                            'color': 'white'
                        })
                    } else {
                        $(this).parent().removeAttr('style')
                    }
                })
            },
            error: function (err) {
                console.log(err)
            }
        })

        $.ajax({
            url: "{{route('api.configure')}}",
            dataType: 'json',
            method: 'GET',
            success: function (res) {
                const configure = res;
                if (Object.keys(configure).length > 0) {
                    $('.appointment_site_name').text(configure.site_name);
                }
            },
            error: function (err) {
                console.log(err)
            }
        })


        let appointmentForm = document.getElementById('appointmentForm');
        appointmentForm.addEventListener('submit', function (e) {
            e.preventDefault();

            let loanTypeName = document.getElementsByName('loan_type[]');
            let loanTypes = [];

            loanTypeName.forEach(item => {
                if (item.checked) {
                    loanTypes.push(item.value)
                }
            })

            let data = {
                first_name: appointmentForm.first_name.value,
                last_name: appointmentForm.last_name.value,
                email: appointmentForm.email.value,
                contact_number: appointmentForm.contact_number.value,
                address: appointmentForm.address.value,
                loan_type: loanTypes,
                income_source: appointmentForm.income_source.value,
                message: appointmentForm.message.value
            }

            $.ajax({
                url: "{{route('api.appointment')}}",
                dataType: 'json',
                method: 'POST',
                data: data,
                success: function (res) {
                    // console.log(res)
                    let message = res.message
                    $('.toast').css('zIndex', '9999')
                    $('.toast-body').empty();
                    $('.toast-body').append(`
                        <div class="text-success font-weight-bold">${message}</div>
                    `);
                    $('.toast').toast('show')

                    appointmentForm.reset();
                    setTimeout(function () {
                        $('.site_dialog').removeAttr('style');
                    }, 2000)
                },
                error: function (res) {
                    let errors = res.responseJSON.errors

                    $('.toast').css('zIndex', '9999')
                    $('.toast-body').empty();
                    Object.keys(errors).forEach(item => {
                        $('.toast-body').append(`
                        <div class="text-theme">* ${errors[item]}</div>
                    `)
                    })

                    $('.toast-body').append(`<div class="text-theme font-weight-bold">Please fill up * fields. </div>`)
                    $('.toast').toast('show')
                }
            })
        })
    })

</script>
