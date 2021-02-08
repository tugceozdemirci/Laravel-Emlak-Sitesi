@extends('layouts.home')

@section('title', 'About Us')
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('content')
    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">İLETİŞİM</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 mb-4">
                            <div class="icon mb-4"><i class="pe-7s-map-2"></i></div>
                            <h5 class="lined mb-4">Address</h5>
                            <p class="text-muted mb-0 text-small">{!! $setting->contact!!}</p>

                        </div>
                        <div class="col-lg-12 col-md-6 mb-4">
                            <div class="icon mb-4"><i class="pe-7s-phone"></i></div>
                            <h5 class="lined mb-4">Call center</h5>
                            <p class="text-muted mb-3 text-small">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                            <p class="text-muted font-weight-bold">{{$setting->phone}}</p>
                        </div>
                        <div class="col-lg-12 col-md-6 mb-4">
                            <div class="icon mb-4"><i class="pe-7s-mail-open"></i></div>
                            <h5 class="lined mb-4">Electronic support</h5>
                            <p class="text-muted mb-3 text-small">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                            <ul>
                                <li><a href="#" class="font-weight-bold text-small">{{$setting->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 ml-auto">
                    <div class="col-lg-12 col-md-6 mb-4">
                        <div class="icon mb-4"><i class="pe-7s-pen"></i></div>
                        <h5 class="lined mb-4">Contact form</h5>
                        @include('home.message')
                        <p class="text-muted text-small">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
                        <form id="contact-form" method="post" action="{{route('sendmessage')}}" class="contact-form form">
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="name" class="font-weight-normal">Firstname</label>
                                    <input id="name" type="text" name="firstname" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="surname" class="font-weight-normal">Lastname </label>
                                    <input id="surname" type="text" name="lastname" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="email" class="font-weight-normal">Email</label>
                                    <input id="email" type="email" name="email" class="form-control">
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="subject" class="font-weight-normal">Subject</label>
                                    <input id="subject" type="text" name="subject" class="form-control">
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="message" class="font-weight-normal">Message</label>
                                    <textarea id="message" rows="6" name="message" class="form-control"></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn btn-outline-primary"> <i class="far fa-envelope mr-2"> </i>Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
