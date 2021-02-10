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
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->category->title) }}</li>
                <li aria-current="page" class="breadcrumb-item active">{{$data->title}}</li>
            </ol>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-md-6">
            @foreach($datalist as $rs)
                <a href="" data-lightbox="gallery" data-title="Description of Project No.1" class=" col-sm-2 p-1">
                    <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
            @endforeach
        </div>
    </div>
        <div class="container">
            <div>
                <h6 class="lined">Price</h6>
                <p>{{$data->price}}</p>
                <h6 class="lined">Area</h6>
                <p>{{$data->area}}</p>
                <h6 class="lined">Location</h6>
                <p>{{$data->location}}</p>
                <h6 class="lined">Floor</h6>
                <p>{{$data->floor}}</p>
                <h6 class="lined">Room</h6>
                <p>{{$data->room}}</p>
                <h6 class="lined">Bathroom</h6>
                <p>{{$data->bathroom}}</p>
                <h6 class="lined">Balcony</h6>
                <p>{{$data->balkony}}</p>
                <h6 class="lined">Heating</h6>
                <p>{{$data->heating}}</p>
                <h6 class="lined">Garden</h6>
                <p>{{$data->garden}}</p>
                <h6 class="lined">Garage</h6>
                <p>{{$data->garage}}</p>
                <div class="text">
                    <p>{!! $data->detail !!}</p>
                </div>
            </div>


        </div>

    </div>
</section>


@endsection


