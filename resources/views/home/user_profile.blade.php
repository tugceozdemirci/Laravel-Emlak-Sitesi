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
    <section class="container">
        <div class="row">
            <div class="col-md-4">
                @include('home.usermenu')
            </div>
            <div class="col-md-8">
                @include('profile.show')
            </div>
        </div>
    </section>

@endsection
