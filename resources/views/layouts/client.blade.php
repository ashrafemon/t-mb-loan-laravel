<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>TMB</title>
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/jquery.geocomplete.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
    @stack('custom-css')
    <script src="{{asset('assets/js/jquery.js')}}"></script>
</head>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            xfbml: true,
            version: 'v9.0'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="108516321089320"
     theme_color="#900a22">
</div>

@include('partials.client.navbar')

@yield('content')

@include('partials.client.footer')

@include('partials.client.appointment')

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBs-fiwwDdoiBtJrumIE81ssFWG9vZ2poM&libraries=places">
</script>
<script src="{{asset('assets/js/jquery.geocomplete.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script>
    $.ajax({
        url: "{{route('api.configure')}}",
        dataType: 'json',
        method: 'GET',
        success: function (res) {
            const configure = res;
            if(configure.meta_desc){
                let meta = document.createElement('meta')
                meta.setAttribute('name', 'description')
                meta.setAttribute('content', configure.meta_desc)
                
                document.head.appendChild(meta)
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
</script>
@stack('custom-js')
</body>
</html>
