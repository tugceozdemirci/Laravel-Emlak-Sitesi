<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">

    <title>Home Property | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}" type="image/x-icon">

    <!-- Font awesome -->
    <!-- Bootstrap -->
    <link href="{{asset('assets')}}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('assets')}}" type="text/css" media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('assets')}}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{asset('assets')}}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


</head>
<body>
@include('home._header')

@include('home._footer')

</body>
</html>
