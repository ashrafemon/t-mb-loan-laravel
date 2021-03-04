<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TMB Admin</title>
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('assets/admin/css/styles.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.21.0/ui/trumbowyg.min.css"
          integrity="sha512-XjpikIIW1P7jUS8ZWIznGs9KHujZQxhbnEsqMVQ5GBTTRmmJe32+ULipOxFePB8F8j9ahKmCjyJJ22VNEX60yg=="
          crossorigin="anonymous"/>
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/745dyu77h5gx33t5w19xrnil317hpx964e92da6an8sig3qz/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>
<body class="sb-nav-fixed">

@include('partials.admin.navbar')

<div id="layoutSidenav">
    @include('partials.admin.sidebar')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>

</div>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous"></script>
@stack('custom-js')
</body>
</html>
