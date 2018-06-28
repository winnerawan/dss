<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="shortcut icon" href="{{ asset("assets/images/favicon.ico") }}">

    <!-- App title -->
    <title>{{ config('app.name') }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset("admin/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css"/>

    <!-- App CSS -->
    <link href="{{ asset("admin/assets/css/style.css") }}" rel="stylesheet" type="text/css"/>

    <!-- Modernizr js -->
    <script src="{{ asset("admin/assets/js/modernizr.min.js") }}"></script>

</head>


<body>

<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="wrapper-page">

    <div class="account-bg">
        <div class="card-box mb-0">
            <div class="text-center m-t-20">
                <a href="{{ url('') }}" class="logo">
                    {{--<i class="zmdi zmdi-group-work icon-c-logo"></i>--}}
                    <img src="{{ asset("assets/images/logo_akbid.png") }}" width="80px" height="80px"><br/>
                    <span>{{ config('app.name') }}</span>
                </a>
            </div>
            <div class="m-t-10 p-20">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                    </div>
                </div>
                <form class="m-t-20" role="form" method="POST" action="{{ url('/admin/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <div class="col-12">
                            <input id="email" name="email" class="form-control" type="email" required="" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <input id="password" name="password" class="form-control" type="password" required="" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12">
                            <div class="checkbox checkbox-custom">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup">
                                    Remember me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center row m-t-10">
                        <div class="col-12">
                            <button class="btn btn-akbid btn-block waves-effect waves-light" type="submit">Log In
                            </button>
                        </div>
                    </div>

                    <div class="form-group row m-t-30 mb-0">
                        <div class="col-12">
                            <a href="{{ url('/admin/password/reset') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot
                                your password?</a>
                        </div>
                    </div>

                </form>

            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- end card-box-->

    <div class="m-t-20">
        <div class="text-center">
            {{--<p class="text-white">Don't have an account? <a href="{{ url('admin/register') }}" class="text-white m-l-5"><b>Sign--}}
                        {{--Up</b></a></p>--}}
        </div>
    </div>

</div>
<!-- end wrapper page -->

<!-- jQuery  -->
<script src="{{ asset("admin/assets/js/jquery.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/popper.min.js") }}"></script><!-- Tether for Bootstrap -->
<script src="{{ asset("admin/assets/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("admin/assets/js/detect.js") }}"></script>
<script src="{{ asset("admin/assets/js/waves.js") }}"></script>
<script src="{{ asset("admin/assets/js/jquery.nicescroll.js") }}"></script>
<script src="{{ asset("admin/assets/plugins/switchery/switchery.min.js") }}"></script>

<!-- App js -->
<script src="{{ asset("admin/assets/js/jquery.core.js") }}"></script>
<script src="{{ asset("admin/assets/js/jquery.app.js") }}"></script>

</body>
</html>

{{--@section('content')--}}
{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-md-8 col-md-offset-2">--}}
{{--<div class="panel panel-default">--}}
{{--<div class="panel-heading">Login</div>--}}
{{--<div class="panel-body">--}}
{{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">--}}
{{--{{ csrf_field() }}--}}

{{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
{{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}

{{--<div class="col-md-6">--}}
{{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>--}}

{{--@if ($errors->has('email'))--}}
{{--<span class="help-block">--}}
{{--<strong>{{ $errors->first('email') }}</strong>--}}
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

{{--<a class="btn btn-link" href="{{ url('/admin/password/reset') }}">--}}
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
