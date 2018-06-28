<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Bootstrap Multi-Purpose Landing Page Template">
    <meta name="keywords" content="LandX, Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="author" content="Mizanur Rahman">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE TITLE -->
    <title>{{ config('app.name') }}</title>

    <!-- =========================
          FAV AND TOUCH ICONS
    ============================== -->
    <link rel="icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- =========================
         STYLESHEETS
    ============================== -->
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">

    <!-- FONT ICONS -->
    <!-- IonIcons -->
    <link rel="stylesheet" href="{{ asset("assets/css/ionicons.css") }}">

    <!-- Font Awesome
    <link rel="stylesheet" href="assets/font-awesome/{{ asset("assets/css/font-awesome.min.css") }}">
    -->

    <!-- Elegant Icons -->
    <link rel="stylesheet" href="{{ asset("assets/elegant-icons/style.css") }}">
    <!--[if lte IE 7]><script src="{{ asset("assets/elegant-icons/lte-ie7.js") }}"></script><![endif]-->



    <!-- CAROUSEL AND LIGHTBOX -->
    <link rel="stylesheet" href="{{ asset("assets/css/owl.theme.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/owl.carousel.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/nivo-lightbox.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/nivo_themes/default/default.css") }}">

    <!-- COLORS -->
    <link rel="stylesheet" href="{{ asset("assets/css/colors/orange.css") }}"> <!-- DEFAULT COLOR/ CURRENTLY USING -->
    <!-- <link rel="stylesheet" href="{{ asset("assets/css/colors/red.css") }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset("assets/css/colors/green.css") }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset("assets/css/colors/purple.css") }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset("assets/css/colors/orange.css") }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset("assets/css/colors/blue-munsell.css") }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset("assets/css/colors/slate.css") }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset("assets/css/colors/yellow.css") }}"> -->

    <!-- CUSTOM STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset("assets/css/login.css") }}">

    <!-- RESPONSIVE FIXES -->
    <link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}">

    <!--[if lt IE 9]>
    <script src="{{ asset("assets/js/html5shiv.js") }}"></script>
    <script src="{{ asset("assets/js/respond.min.js") }}"></script>
    <![endif]-->

    <!-- ****************
          After neccessary customization/modification, Please minify HTML/CSS according to http://browserdiet.com/en/ for better performance
         **************** -->

</head>

<body>
<!-- =========================
     PRE LOADER
============================== -->
<div class="preloader">
    <div class="status">&nbsp;</div>
</div>

<!-- =========================
     HEADER
============================== -->
<header id="home">

    <!-- COLOR OVER IMAGE -->
    <div class="color-overlay">

        <div class="navigation-header">

            <!--&lt;!&ndash; STICKY NAVIGATION &ndash;&gt;-->
            <!--<div class="navbar navbar-inverse bs-docs-nav navbar-fixed-top sticky-navigation">-->
            <!--<div class="container">-->
            <!--<div class="navbar-header">-->

            <!--&lt;!&ndash; LOGO ON STICKY NAV BAR &ndash;&gt;-->
            <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#landx-navigation">-->
            <!--<span class="sr-only">Toggle navigation</span>-->
            <!--<span class="icon-bar"></span>-->
            <!--<span class="icon-bar"></span>-->
            <!--<span class="icon-bar"></span>-->
            <!--</button>-->
            <!--<a class="navbar-brand" href="#"><img src="images/logo-dark.png" alt=""></a>-->

            <!--</div>-->

            <!--&lt;!&ndash; NAVIGATION LINKS &ndash;&gt;-->
            <!--<div class="navbar-collapse collapse" id="landx-navigation">-->
            <!--<ul class="nav navbar-nav navbar-right main-navigation">-->
            <!--<li><a href="#home">Home</a></li>-->
            <!--<li><a href="#section1">Brief</a></li>-->
            <!--<li><a href="#section3">Features</a></li>-->
            <!--<li><a href="#section4">Pricing</a></li>-->
            <!--<li><a href="#section5">Video</a></li>-->
            <!--<li><a href="#section6">Screenshots</a></li>-->
            <!--<li><a href="#section7">Testimonial</a></li>-->
            <!--<li><a href="#section8">Contact</a></li>-->
            <!--</ul>-->
            <!--</div>-->

            <!--</div>-->
            <!--&lt;!&ndash; /END CONTAINER &ndash;&gt;-->

            <!--</div>-->

            <!-- /END STICKY NAVIGATION -->

            <!-- ONLY LOGO ON HEADER -->
            <div class="navbar non-sticky">

                <div class="container">

                    <div class="navbar-header">
                        <img src="images/logo.png" alt="">
                    </div>

                    <ul class="nav navbar-nav navbar-right social-navigation hidden-xs">
                        <li><a href="#"><i class="social_facebook_circle"></i></a></li>
                        <li><a href="#"><i class="social_twitter_circle"></i></a></li>
                        <li><a href="#"><i class="social_linkedin_circle"></i></a></li>
                    </ul>
                </div>
                <!-- /END CONTAINER -->

            </div>
            <!-- /END ONLY LOGO ON HEADER -->

        </div>

        <!-- HEADING, FEATURES AND REGISTRATION FORM CONTAINER -->
        <div class="container">

            <div class="row">

                <!-- LEFT - HEADING AND TEXTS -->
                <div class="col-md-7 col-sm-7 intro-section">

                    <h1 class="intro text-left">
                        <strong><br>{{ config('app.name') }}<br></strong>
                    </h1>

                    <ul class="feature-list-1">

                        <!-- FEATURE ROW -->
                        <li>
                            <!--<div class="icon-container pull-left">-->
                            <!--<span class="icon_check"></span>-->
                            <!--</div>-->
                            <p class="text-left">
                                <br>
                            </p>
                        </li>

                        <!-- FEATURE ROW -->
                        <li>
                            <!--<div class="icon-container pull-left">-->
                            <!--<span class="icon_check"></span>-->
                            <!--</div>-->
                            <p class="text-left">
                                <br>
                            </p>
                        </li>

                    </ul>

                </div>

                <!-- RIGHT - REGISTRATION FORM -->

                <div class="col-md-5 col-sm-5">

                    <div class="vertical-registration-form">`
                        <div class="colored-line">
                        </div>
                        <h3>Login Mahasiswa</h3>
                        <form class="registration-form" role="form" method="POST" action="{{ url('/student/login') }}">
                            {{ csrf_field() }}

                            <input class="form-control input-box" id="nim" type="text" name="nim" placeholder="NIM">
                            <input class="form-control input-box" id="password" type="password" name="password" placeholder="Password">
                            <button class="btn standard-button" type="submit" id="submit" name="submit">Masuk</button>
                        </form>
                    </div>
                </div>
                <!-- /END - REGISTRATION FORM -->
            </div>

        </div>
        <!-- /END HEADING, FEATURES AND REGISTRATION FORM CONTAINER -->

    </div>

</header>

<!-- START FOOTER -->

        {{--<div class="copyrights">--}}
                {{--<p>Copyright © 2018. {{ config('app.name') }} All right reserved.</p>--}}
                {{--<!--<span>Design by: <a href="#.">Brighthemes</a></span>-->--}}
        {{--</div>--}}

<!-- END FOOTER -->
<!-- =========================
     SECTION 10 - FOOTER
============================== -->



<!-- =========================
     SCRIPTS
============================== -->
<script src="{{ asset("assets/js/jquery.min.js") }}"></script>

<script>
    /* =================================
       LOADER
    =================================== */
    // makes sure the whole site is loaded
    jQuery(window).load(function() {
        "use strict";
        // will first fade out the loading animation
        jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
        jQuery(".preloader").delay(1000).fadeOut("slow");
    })

</script>

<script src="{{ asset("assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assets/js/retina-1.1.0.min.js") }}"></script>
<script src="{{ asset("assets/js/smoothscroll.js") }}"></script>
<script src="{{ asset("assets/js/jquery.scrollTo.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.localScroll.min.js") }}"></script>
<script src="{{ asset("assets/js/owl.carousel.min.js") }}"></script>
<script src="{{ asset("assets/js/nivo-lightbox.min.js") }}"></script>
<script src="{{ asset("assets/js/simple-expand.min.js") }}"></script>
<script src="{{ asset("assets/js/jquery.nav.js") }}"></script>
<script src="{{ asset("assets/js/jquery.fitvids.js") }}"></script>
<script src="{{ asset("assets/js/jquery.ajaxchimp.min.js") }}"></script>
<script src="{{ asset("assets/js/custom.js") }}"></script>
<!-- ****************
      After neccessary customization/modification, Please minify JavaScript/jQuery according to http://browserdiet.com/en/ for better performance
     **************** -->
</body>
</html>






{{--@section('content')--}}
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/student/login') }}">--}}
                        {{--{{ csrf_field() }}--}}

                        {{--<div class="form-group{{ $errors->has('nim') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="nim" type="text" class="form-control" name="nim" value="{{ old('nim') }}" autofocus>--}}

                                {{--@if ($errors->has('nim'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('nim') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password">--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember"> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ url('/student/password/reset') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
