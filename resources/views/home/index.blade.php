@php
  $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp

@extends('layouts.home')
@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    @include('home._slider')
    <section class="bg-gray py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0"><a href="#" class="d-block"><img src="{{asset('assets')}}/img/blog1.jpg" alt="" class="img-fluid mb-4"></a>
                    <h3 class="h5 mb-4"><a href="#" class="text-dark">Ücretsiz ilan ver</a></h3>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5">
            <h2 class="mb-5">Şehirler</h2>
            <div class="row mb-2">

            </div>
        </div>
    </section>

@endsection
