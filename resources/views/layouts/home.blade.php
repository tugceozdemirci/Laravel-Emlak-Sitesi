<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <meta name="description" content="@yield('description') ">
    <meta name="keywords" content="@yield('keywords') ">
    <meta name="author" content="Tuğçe Özdemirci">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="{{asset('assets')}}/https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Icon fonts-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/pe-icon-7-stroke.css">
    <!-- Lightbox CSS-->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/lightbox2/css/lightbox.min.css">
    <!-- Leaflet CSS-->
    <link rel="stylesheet" href="{{asset('assets')}}/vendor/leaflet/leaflet.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets')}}/img/favicon.jpg">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
@include('home._header')
<div id="loginModal" tabindex="-1" role="dialog" aria-lebelledby="loginModalLabel" aria-hidden="true" class="modal fade">
    <div role="document" class="modal-dialog modal-sm">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 id="loginModalLabel" class="text-uppercase modal-title m-0">Giriş yap</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true" class="small text-muted">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group">
                        <input type="email" placeholder="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="password" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-primary nav-btn btn-sm"> <i class="fas fa-sign-out-alt mr-2"></i>Login </button>
                    </div>
                </form>
                <div class="text-center">
                    <p class="text-muted small">Not registered yet?</p>
                    <p class="small text-muted"> <a href="#" class="font-weight-bold">Register now!</a> It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('home._slider')
@section('content')
    @show


@include('home._footer')

</body>
</html>
