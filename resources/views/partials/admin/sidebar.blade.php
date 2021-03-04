<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{route('admin.dashboard.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseConfigure"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Configuration
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseConfigure" aria-labelledby="headingOne"
                     data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.configure.edit')}}">Configuration</a>
                        <a class="nav-link" href="{{route('admin.configure.create')}}">Set Configuration</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClient"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Our Clients
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseClient" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.client.index')}}">All Clients</a>
                        <a class="nav-link" href="{{route('admin.client.create')}}">Create Client</a>
                    </nav>
                </div>
                <a class="nav-link" href="{{route('admin.why.edit')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Why Page
                </a>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOffice"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Get in Touch
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseOffice" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.office.index')}}">All Office Info</a>
                        <a class="nav-link" href="{{route('admin.office.create')}}">Create Office Info</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAppointment"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Appointment
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAppointment" aria-labelledby="headingOne"
                     data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.appointment.index')}}">All Appointments</a>
                    </nav>
                </div>
                {{--                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComplain"--}}
                {{--                   aria-expanded="false" aria-controls="collapseLayouts">--}}
                {{--                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>--}}
                {{--                    Complain--}}
                {{--                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>--}}
                {{--                </a>--}}
                {{--                <div class="collapse" id="collapseComplain" aria-labelledby="headingOne"--}}
                {{--                     data-parent="#sidenavAccordion">--}}
                {{--                    <nav class="sb-sidenav-menu-nested nav">--}}
                {{--                        <a class="nav-link" href="{{route('admin.complain.index')}}">All Complain</a>--}}
                {{--                    </nav>--}}
                {{--                </div>--}}
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHero"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Static Page Banner
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseHero" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.hero.index')}}">All Page Banner</a>
                        <a class="nav-link" href="{{route('admin.hero.create')}}">Create Page Banner</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLoan"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Loan Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLoan" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.loan.index')}}">All Loan</a>
                        <a class="nav-link" href="{{route('admin.loan.create')}}">Create Loan</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePost"
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Post Management
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePost" aria-labelledby="headingOne"
                     data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('admin.post.index')}}">All Post</a>
                        <a class="nav-link" href="{{route('admin.post.create')}}">Create Post</a>
                    </nav>
                </div>

            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{Auth::user()->name}}
        </div>
    </nav>
</div>
