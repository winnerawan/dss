<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{ url('') }}" class="logo">
                    <img src="{{ asset("assets/images/logo_akbid.png") }}" width="40px" height="40px"/>
                    {{--<i class="zmdi zmdi-group-work icon-c-logo"></i>--}}
                    <span>{{ config('app.name') }}</span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras navbar-topbar">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>


                    {{--<li class="list-inline-item dropdown notification-list">--}}
                        {{--<a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">--}}
                            {{--<i class="zmdi zmdi-format-subject noti-icon"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="icon-user"></i>
{{--                            <img src="{{ asset("admin/assets/images/users/avatar-1.jpg") }}" alt="user" class="rounded-circle">--}}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>{{ Auth::user()->name }}</small> </h5>
                            </div>



                            <!-- item-->
                            <a href="{{ url('/student/logout') }}"
                               onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>
                            <form id="logout-form"
                                  action="{{ url('/student/logout') }}"
                                  method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>

                </ul>

            </div> <!-- end menu-extras -->
            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->


    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="{{ url('student/home') }}"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('student/hitung') }}"><i class="zmdi zmdi-code-setting"></i><span> Hitung </span> </a>

                    </li>


                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->