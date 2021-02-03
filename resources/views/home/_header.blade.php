@php
$parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp


<header class="header">
    <nav class="navbar navbar-expand-lg py-lg-0">
        <div class="container"><a href="index.html" class="navbar-brand text-uppercase font-weight-bold"><img src="{{asset('assets')}}/img/favicon2.jpg">tuğçe Emlak</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right small"><span class="text-uppercase mr-2">Menu</span><i class="fas fa-bars"></i></button>
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto d-lg-flex align-items-lg-center">
                    <li class="nav-item dropdown"><a id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold text-uppercase px-lg-3 py-lg-4 dropdown-toggle">Satılık</a>
                        <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0">
                            @foreach($parentCategories as $rs)
                                <a class="dropdown-item small text-uppercase">{{$rs->title}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item"><a href="contact.html" class="nav-link font-weight-bold text-uppercase px-lg-3 py-lg-4">Projeler </a>
                    </li>
                    <li class="nav-item"><a href="contact.html" class="nav-link font-weight-bold text-uppercase px-lg-3 py-lg-4">Hakkımızda </a>
                    </li>
                    <li class="nav-item mt-4 mt-lg-0">
                        <button type="button" data-toggle="modal" data-target="#loginModal" class="btn btn-outline-primary nav-btn btn-sm"> <i class="fas fa-sign-out-alt mr-2"></i>Login </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
