@php
  $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp

@extends('layouts.home')
@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    @include('home._slider')
    <section class="py-5 bg-gray">
        <div class="container">
            <h2 class="lined mb-4">İlanlar</h2>
            <div class="row">
            @foreach($last as $rs)
                <div class="bg-gray col-md-5"><a href="#" class="d-block"><img src="{{Storage::url($rs->image)}}" alt="" style="height: 300px" class="img-fluid mb-4"></a>
                    <h3 class="h5 mb-4"><a href="#" class="text-dark">{{$rs->title}}</a></h3>
                    <h3 class="h5 mb-4">{{$rs->price}}</h3><a href="{{route('apartment', ['id'=>$rs->id])}}" class="btn btn-outline-primary btn-sm">View</a>
                    <div class="border-bottom my-4"></div>
                </div>
            @endforeach
            </div>
        </div>
    </section>
@endsection
