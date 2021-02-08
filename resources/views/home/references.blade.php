@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@extends('layouts.home')

@section('title', 'References')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Referanslarımız</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <h1 class="lined">Hakkımızda</h1>
                {!!$setting->references!!}



            </div>
        </div>
    </section>


@endsection
