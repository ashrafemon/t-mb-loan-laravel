<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">MySite</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle">
        <i class="fas fa-bars"></i>
    </button>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i> {{Auth::user()->name}}
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
            </div>
        </li>
    </ul>
</nav>

<script>
    $.ajax({
        url: "{{route('api.configure')}}",
        dataType: 'json',
        method: 'GET',
        success: function (res) {
            // console.log(res)
            const configure = res;
            if (Object.keys(configure).length > 0) {
                $('.navbar-brand').text(configure.site_name)
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
</script>
