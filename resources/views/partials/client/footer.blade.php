{{--Footer Bar Start--}}
<div class="footer_wrapper pt-4 bg-theme text-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-3 col-12 footer_item mb-lg-0 mb-md-0 mb-3">
                <h5>Get in touch</h5>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-theme btn-talk" href="javascript:void(0)">Book an appointment</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-theme" href="{{route('get_in_touch')}}">Speak with us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-12 footer_item mb-lg-0 mb-md-0 mb-3">
                <h5>Explore</h5>

                <ul class="nav flex-column" id="exploreLoan"></ul>
            </div>
            <div class="col-lg-3 col-md-3 col-12 footer_item mb-lg-0 mb-md-0 mb-3">
                <h5>About</h5>

                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-theme" href="{{route('why_us')}}">Why <span
                                class="why_site_name"></span></a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-3 col-12 footer_item mb-lg-0 mb-md-0 mb-3">
                <h5>Contact Us</h5>

                <ul class="nav flex-column" id="contactOffice">
                    <li class="nav-item">
                        
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright py-2 mt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-12">
                    <p id="copyright_text" class="text-left">&copy; Copyright</p>
                </div>
            </div>
        </div>
        {{--<p>Developed by Grid Stack Solutions Ltd.</p>--}}
    </div>
</div>
{{--Footer Bar End--}}

<script>
    $.ajax({
        url: "{{route('api.loans')}}",
        dataType: 'json',
        method: 'GET',
        success: function (res) {
            // console.log(res)
            res.forEach(item => {
                $('#exploreLoan').append(`
                    <li class="nav-item">
                        <a class="nav-link text-theme" href="{{url('/loan')}}/${item.slug}">${item.name}</a>
                    </li>
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
            if (Object.keys(configure).length > 0) {
                $('.why_site_name').text(configure.site_name)
                $('#copyright_text').text(configure.copyright)
                
                $('#contactOffice').append(`
                    <li class="nav-item">
                        <a class="nav-link text-theme" href="${configure.fb_link} ">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                    </li>
                `)
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
    
    $.ajax({
        url: "{{route('api.office')}}",
        dataType: 'json',
        method: 'GET',
        success: function (res) {
            if(Object.keys(res).length > 0){
                $('#contactOffice').append(`
                    <li class="nav-item">
                        <div class="nav-link text-theme">
                            ${res.name} 
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link text-theme">
                            ${res.address} 
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="nav-link text-theme">
                            ${res.number} 
                        </div>
                    </li>
                `)
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
</script>
