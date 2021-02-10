@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@extends('layouts.home')
@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item active">Apartments list > {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }} </li>
                </ol>
            </div>
        </div>
    </section>
    <section class="bg-white py-4">
        <div class="container py-4">
            <div class="row">
                @foreach($datalist as $rs)
                    <div class="col-md-6 bg-gray"><a href="#" class="d-block"><img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid mb-4"></a>
                        <h3 class="h5 mb-4"><a href="#" class="text-dark">{{$rs->title}}</a></h3>
                        <h3 class="h5 mb-4">{{$rs->price}}</h3><a href="{{route('apartment', ['id'=>$rs->id])}}" class="btn btn-outline-primary btn-sm">View</a>
                        <div class="border-bottom my-4"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
