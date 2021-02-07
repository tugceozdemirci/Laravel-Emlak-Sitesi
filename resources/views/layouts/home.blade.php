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
@section('content')
    @show

@include('home._footer')

</body>
</html>
