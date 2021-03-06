<!DOCTYPE html>
<html><head>
    <title>{{ config('app.name') }}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="icon" type="image/png" href="{{ asset("assets/images/favicon.ico") }}">

    <!--main file-->
    <link href="{{ asset("assets/css/architecture.css") }}" rel="stylesheet" type="text/css">

    <!--Architecture Font Icons-->
    <link href="{{ asset("assets/fonts/architecture.css") }}" rel="stylesheet" type="text/css">

    <!-- Default Color -->
    <link href="{{ asset("assets/css/default-color.css") }}" rel="stylesheet" type="text/css">

    <!-- Custom Menu -->
    <link href="{{ asset("assets/css/custom-menu.css") }}" rel="stylesheet" type="text/css">

    <!--Bootstrap-->
    <link href="{{ asset("assets/css/bootstrap.css") }}" rel="stylesheet" type="text/css">

    <!--Revolution-->
    <link href="{{ asset("assets/css/settings.css") }}" rel="stylesheet" type="text/css">

    <!--Architecture CAROUSEL-->
    <link href="{{ asset("assets/css/owl.carousel.css") }}" rel="stylesheet" type="text/css">

    <!--Services Tabs-->
    <link href="{{ asset("assets/css/tabs.css") }}" rel="stylesheet" type="text/css">

    <!--Project Mouse hover-->
    <link href="{{ asset("assets/css/set1.css") }}" rel="stylesheet" type="text/css">

    <!--PreLoader-->
    <link href="{{ asset("assets/css/loader.css") }}" rel="stylesheet" type="text/css">

</head>
<body>

<div id="wrap">

    {{--<!-- LOADER -->--}}
    {{--<div id="loader-wrapper">--}}
        {{--<div id="loader"><img src="{{ asset("assets/images/favicon.ico") }}" alt=""><span>Loading...</span></div>--}}
        {{--<!--/#loader-->--}}
        {{--<div class="loader-section section-left"></div>--}}
        {{--<!--/#loader-section section-left-->--}}
        {{--<div class="loader-section section-right"></div>--}}
        {{--<!--/#loader-section section-right-->--}}
    {{--</div>--}}


    <!-- CUSTOM MENU START -->
    {{--<div class="mobile-menu">--}}
        {{--<div class="cd-header">--}}
            {{--<a class="cd-primary-nav-trigger" href="javascript:void(0);">--}}
                {{--<span class="cd-menu-icon"></span>--}}
            {{--</a>--}}
        {{--</div>--}}


        {{--<nav>--}}
            {{--<ul class="cd-primary-nav">--}}
                {{--<li class="cd-label">Custom Menu</li>--}}

                {{--<li><a href="index.html">Home</a></li>--}}
                {{--<li><a href="#">work</a></li>--}}
                {{--<li><a href="#">About Us</a></li>--}}
                {{--<li><a href="#">news</a></li>--}}
                {{--<li><a href="contact-us.html">contact us</a></li>--}}
                {{--<li class="cd-label">Follow us</li>--}}

                {{--<li class="social-icons">--}}
                    {{--<a href="#."><span class="icon-facebook-1"></span></a>--}}
                    {{--<a href="#."><span class="icon-twitter-1"></span></a>--}}
                    {{--<a href="#."><span class="icon-google"></span></a>--}}
                    {{--<a href="#."><span class="icon-behance"></span></a>--}}
                {{--</li>--}}

            {{--</ul>--}}
        {{--</nav>--}}
    {{--</div>--}}
    <!-- CUSTOM MENU END -->

    <!-- MAIN HEADER -->

    <header class="header-one cb-header">
        <div class="container">

            <div class="header">
                <div class="row">
                    <div class="col-md-12">

                        <div class="navbar-brand">
                            <a href="{{ url('') }}"><img style="margin-bottom: 25px;" alt="" src="" ></a>
                        </div>

                        <div class="navigation">

                            <ul>
                                <li class="select"><span>01.</span><a href="index.html"></a></li>
                                <li><span>02.</span><a href="#">about us</a></li>
                                <li><span>03.</span><a href="#">news</a></li>
                                <li><span>04.</span><a href="#">contact us</a></li>
                                <li><span>05.</span><a href="admin/login">administrator</a></li>
                            </ul>

                            <div class="language">
                                <a href="#."></a>
                            </div>

                        </div>



                    </div>
                </div>
            </div>

        </div>
    </header>


    <!-- STICKY HEADER -->

        <header class="header-two cb-header">

                <div class="container">

                    <div class="header">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="logo">
                                <a href="#."><img src="images/logo-thumb.png" alt=""></a>
                            </div>

                            <div class="navigation">

                            <ul>
                                <li class="select"><a href="index.html">home</a></li>
                                <li><a href="#">work</a></li>
                                <li><a href="#">about us</a></li>
                                <li><a href="#">news</a></li>
                                <li><a href="contact-us.html">contact us</a></li>
                            </ul>

                            <div class="language">
                                <a href="#.">fr</a>
                            </div>

                            </div>



                        </div>
                    </div>
                    </div>

                </div>


        </header>









    <!--
    #################################
        - THEMEPUNCH BANNER -
    #################################
    -->
    <div class="tp-banner-container main-banner">
        <div class="tp-banner white-slide " >
            <ul>	<!-- SLIDE  -->








                <li data-transition="fade" data-slotamount="7" data-masterspeed="500" data-thumb=""  data-saveperformance="on"  data-title="Intro Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset("assets/images/slides/background.jpg") }}" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->





                    <div class="tp-caption grey_heavy_72 fade start"
                         data-x="60"
                         data-y="610"
                         data-speed="1000"
                         data-start="1000"

                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index:7; max-width: auto; font-size:20px; letter-spacing:2px; max-height: auto; white-space: nowrap;">SPK PENILAIAN
                    </div>


                    <div class="tp-caption black_heavy_60 fade start"
                         data-x="60"
                         data-y="640"
                         data-speed="1000"
                         data-start="1000"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap; text-transform:uppercase; line-height:72px;">
                            KINERJA <br/>DOSEN
                    </div>


                    <div class="tp-caption customin rs-parallaxlevel-0"
                         data-x="left"
                         data-y="bottom"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="0"
                         data-start="10"
                         data-easing="Power3.easeInOut"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         style="z-index: 6;"><img style="width:100%;" alt="" src="{{ asset("assets/images/slides/yellow-bg.png") }}">
                    </div>



                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption customin tp-resizeme rs-parallaxlevel-0 fade"
                         data-x="60"
                         data-y="820"
                         data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="1000"
                         data-start="1000"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-linktoslide="next"
                         style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap;"><a href='{{ url('student/login') }}' class='largeredbtn'>Masuk</a>
                    </div>


                </li>

            </ul>
            <div class="tp-bannertimer"></div>	</div>
    </div>



    <!-- START FOOTER -->
    <footer class="footer">

        <div class="footer-bottom">
            <div class="copyrights">
                <div class="container">
                    <p>Copyright © 2018. {{ config('app.name') }} All right reserved.</p>
                    <!--<span>Design by: <a href="#.">Brighthemes</a></span>-->

                </div>
            </div>
        </div>

    </footer>
    <!-- END FOOTER -->


</div>




<script type="text/javascript" src="{{ asset("assets/js/jquery.js") }}"></script>

<!-- Sticky Header -->
<script type="text/javascript" src="{{ asset("assets/js/sticky-header.js") }}"></script>

<!-- SMOOTH SCROLL -->
<script type="text/javascript" src="{{ asset("assets/js/scroll-desktop-smooth.js") }}"></script>

<!-- Custom Menu -->
<script type="text/javascript" src="{{ asset("assets/js/main.js") }}"></script>

<!-- START REVOLUTION SLIDER -->
<script type="text/javascript" src="{{ asset("assets/js/jquery.themepunch.revolution.min.js") }}"></script>
<script type="text/javascript" src="{{ asset("assets/js/jquery.themepunch.tools.min.js") }}"></script>

<!-- SERVICES Tabs -->
<script type="text/javascript" src="{{ asset("assets/js/tabs.js") }}"></script>

<!-- OWL CAROUSEL -->
<script type="text/javascript" src="{{ asset("assets/js/owl.carousel.js") }}"></script>

<!-- CUSTOM -->
<script type="text/javascript" src="{{ asset("assets/js/custom.js") }}"></script>

<!-- Revolution Slider -->
<script type="text/javascript">

    jQuery(document).ready(function() {



        jQuery('.tp-banner').show().revolution(
            {
                dottedOverlay:"none",
                delay:9999,
                startwidth:1920,
                startheight:940,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"bullets",
                navigationArrows:"solo",
                navigationStyle:"preview",

                touchenabled:"on",
                onHoverStop:"on",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner4",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",



                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                videoJsPath:"rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });




    });	//ready

</script>


</body>
</html>