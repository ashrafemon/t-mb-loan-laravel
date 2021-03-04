<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TMB Auth</title>
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/auth/main.css')}}"/>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
</head>
<body>

<div class="auth_wrapper">
    @yield('content')
</div>


<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/auth/main.js')}}"></script>
</body>
</html>
