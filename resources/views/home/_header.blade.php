@php
$parentCategories = \App\Http\Controllers\HomeController::categorylist();
$setting = \App\Http\Controllers\HomeController::getSetting()
@endphp

<header class="header">
    <nav class="navbar navbar-expand-lg py-lg-0">
        <div class="container"><a href="/home" class="navbar-brand text-uppercase font-weight-bold"><img src="{{asset('assets')}}/img/favicon2.jpg">tuğçe Emlak</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right small"><span class="text-uppercase mr-2">Menu</span><i class="fas fa-bars"></i></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse" @if(!isset($page)) @endif>
                <ul class="navbar-nav ml-auto d-lg-flex align-items-lg-center">
                    <li class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold text-uppercase px-lg-3 py-lg-4 dropdown-toggle">Satılık</a>
                        <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0">
                            @foreach($parentCategories as $rs)
                                <a href="{{route('categoryapartments',['id'=> $rs->id])}}" class="dropdown-item small text-uppercase">{{$rs->title}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item"><a href="{{route('aboutus')}}" class="nav-link font-weight-bold text-uppercase px-lg-3 py-lg-4">Hakkımızda</a>
                    </li>
                    <li class="nav-item"><a href="{{route('contact')}}" class="nav-link font-weight-bold text-uppercase px-lg-3 py-lg-4">İletİşİm </a>
                    </li>
                    <li class="nav-item">
                        @auth
                            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0">
                                <strong class="text-uppercase">{{ Auth::user()->name }}</strong>
                            </div>
                        @endauth
                        @guest
                        <li class="nav-item"><a href="/login" class="nav-link font-weight-bold text-uppercase px-lg-3 py-lg-4">Login</a></li>
                        <li class="nav-item"><a href="/register" class="nav-link font-weight-bold text-uppercase px-lg-3 py-lg-4">Join</a></li>
                        @endguest
                        </div>


                        <li class="nav-item dropdown">
                            <button id="dropdownMenuButton" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-secondary dropdown-toggle"></button></a>
                            <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0">
                                <a href="{{route('myprofile')}}" class="dropdown-item small text-uppercase">My Account</a>
                                <a href="#" class="dropdown-item small text-uppercase">Setting</a>
                                <a href="{{route('user_apartmets')}}" class="dropdown-item small text-uppercase">My Apartments</a>
                                <a href="{{route('logout')}}" class="dropdown-item small text-uppercase">Logout</a>
                            </div>
                        </li>


                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


