@extends('layouts.home')
@section('title', 'User Profile')
@section('content')
    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-5">
            <div class="column">
                <div class="dropdown-menu-left" id="userprofilemenu">
                    <ul><h1 class="lined">Text page</h1>
                        <li><a href=""> My Profile</a></li>
                        <li><a href=""> My Message</a></li>
                        <li><a href=""> </a></li>
                        <li><a href="{{route('logout')}}"> Logout</a></li>
                    </ul>
                </div>
            </div>


            </div>
    </section>

@endsection
