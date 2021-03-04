<style>
    .navbar_wrapper .site_navbar_brand {
        flex: 1;
    }
    .navbar_wrapper .site_navbar .site_navbar_brand .mobileNavToggler{
        display: block;
    }
    
    .navbar_wrapper .site_navbar_mobile_nav {
        left: 100%;
        transform: translateX(-100%);
    }
    
    #contactModal h2, #contactModal h4, .speak-btn{
        font-family: "Circular Bold";
    }
    
    .speak-btn{
        font-size: 18px;
        color: #e3cc95;
    }
    
    @media(max-width: 440px){
        .site_name{
            font-size: 1.5rem;
        }
        .site_logo{
            width: 50px;
        }
        
        .speak-btn{
            font-size: 14px;
            margin-right: 0.1rem !important;
        }
    }
    
    @media(max-width: 366px){
        .site_name{
            font-size: 1.1rem;
            top: -2px !important;
        }
        .site_logo{
            width: 40px;
        }
        
        .speak-btn{
            font-size: 12px;
        }
        
        .mobileNavToggler .fa-2x{
            font-size: 1.5em;
        }
    }
    
    @media(max-width: 366px){
        .mobileNavToggler .fa-2x{
            font-size: 1.1em;
        }
    }
</style>

{{--Navigation Bar Start--}}
<div class="navbar_wrapper fixed-top">
    <div class="container-fluid">
        <div class="site_navbar">
            <div class="site_navbar_brand">
                <a href="{{route('home')}}">
                    <span class="site_name"></span>
                </a>
                
                <div class="d-flex align-items-center">
                    <button class="btn btn-transparent mr-2 speak-btn" data-toggle="modal" data-target="#contactModal">
                        <i class="fas fa-phone-alt mr-2"></i>
                        <span>Speak with us</span>
                    </button>
    
                    <button class="btn btn-transparent mobileNavToggler">
                        <i class="fas fa-bars fa-2x"></i>
                    </button>
                </div>
            </div>

            <!--<div class="site_navbar_nav">-->
            <!--    <ul class="nav justify-content-end">-->
            <!--        <li class="nav-item">-->
            <!--            <a class="nav-link" href="{{route('home')}}">-->
            <!--                <i class="fas fa-bars"></i>-->
            <!--                <span>Home</span>-->
            <!--            </a>-->
            <!--        </li>-->
            <!--        <li class="nav-item dropdown">-->
            <!--            <a class="nav-link" href="javascript:void(0)">-->
            <!--                <i class="far fa-money-bill-alt"></i>-->
            <!--                <span>Loan</span>-->
            <!--            </a>-->

            <!--            <div class="dropdown_nav loanDropdown"></div>-->
            <!--        </li>-->
            <!--        <li class="nav-item dropdown">-->
            <!--            <a class="nav-link" href="javascript:void(0)">-->
            <!--                <i class="fas fa-calculator"></i>-->
            <!--                <span>Calculator</span>-->
            <!--            </a>-->

            <!--            <div class="dropdown_nav">-->
            <!--                <a class="dropdown_nav_item" href="{{route('calculator.mortgage.index')}}">Mortgage-->
            <!--                    Repayments</a>-->
            <!--                <a class="dropdown_nav_item" href="{{route('calculator.borrow.index')}}">Borrowing Power</a>-->
            <!--                <a class="dropdown_nav_item" href="{{route('calculator.repayment.index')}}">Extra-->
            <!--                    Repayments</a>-->
            <!--                <a class="dropdown_nav_item" href="{{route('calculator.savings.index')}}">Savings</a>-->
            <!--                <a class="dropdown_nav_item" href="{{route('calculator.stamp.index')}}">Stamp duty</a>-->
            <!--            </div>-->
            <!--        </li>-->
            <!--        <li class="nav-item">-->
            <!--            <a class="nav-link" href="{{route('why_us')}}">-->
            <!--                <i class="fas fa-question"></i>-->
            <!--                <span>Why </span><span class="nav_site_name"></span>-->
            <!--            </a>-->
            <!--        </li>-->
            <!--        <li class="nav-item">-->
            <!--            <a class="nav-link" href="{{route('get_in_touch')}}">-->
            <!--                <i class="fas fa-handshake"></i>-->
            <!--                <span>Get in touch</span>-->
            <!--            </a>-->
            <!--        </li>-->
            <!--    </ul>-->
            <!--</div>-->
        </div>

        <div class="site_navbar_mobile_nav">
            <ul class="nav flex-column">
                <li class="nav-item brand">
                    <a class="nav-link" href="{{route('home')}}">
                        <span class="site_name"></span>
                    </a>

                    <button class="btn btn-transparent site_navbar_mobile_nav_close">
                        <i class="fas fa-times fa-3x text-white"></i>
                    </button>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">
                        <i class="fas fa-bars"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="far fa-money-bill-alt"></i>
                        <span>Loan</span>
                    </a>

                    <div class="dropdown_nav loanDropdown"></div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="javascript:void(0)">
                        <i class="fas fa-calculator"></i>
                        <span>Calculator</span>
                    </a>

                    <div class="dropdown_nav">
                        <a class="dropdown_nav_item" href="{{route('calculator.mortgage.index')}}">Mortgage
                            Repayments</a>
                        <a class="dropdown_nav_item" href="{{route('calculator.borrow.index')}}">Borrowing Power</a>
                        <a class="dropdown_nav_item" href="{{route('calculator.repayment.index')}}">Extra Repayments</a>
                        <a class="dropdown_nav_item" href="{{route('calculator.savings.index')}}">Savings</a>
                        <a class="dropdown_nav_item" href="{{route('calculator.stamp.index')}}">Stamp duty</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('why_us')}}">
                        <i class="fas fa-question"></i>
                        <span>Why </span><span class="nav_site_name"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('get_in_touch')}}">
                        <i class="fas fa-handshake"></i>
                        <span>Get in touch</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
{{--Navigation Bar End--}}


{{--Contact Popup Start--}}
<div class="modal fade" id="contactModal">
    <div class="modal-dialog modal-dialog-centered modal-dialog-sm">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2 class="text-theme">Contact with us at</h3>
                <h4 class="text-theme">
                    <i class="fa fa-phone"></i>
                    <span id="contactNumber"></span>
                </h4>
            </div>
        </div>
    </div>
</div>
{{--Contact Popup End--}}

<script>
    $.ajax({
        url: "{{route('api.loans')}}",
        dataType: 'json',
        method: 'GET',
        success: function (res) {
            // console.log(res)
            res.forEach(item => {
                $('.loanDropdown').append(`
                    <a class="dropdown_nav_item" href="{{url('/loan')}}/${item.slug}">${item.name}</a>
                `)
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
            // console.log(configure)
            if (Object.keys(configure).length > 0) {
                $('.nav_site_name').text(configure.site_name);
                $('.site_name').text(configure.site_name);
                $('#contactNumber').text(configure.contact_number)
                // $('#call_us_text').text(configure.contact_number);
                $('.site_name').parent().prepend(`
                    <img class='site_logo' src='{{asset('')}}${configure.site_logo}' alt='logo' />
                `)
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
</script>
