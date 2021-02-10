@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
@extends('layouts.home')
@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)

@section('css')
    <style>
        @media only screen and (max-width: 1200px) {
            .imgslider{
                max-height: 400px;
            }
        }
        @media only screen and (min-width: 1200px) {
            .imgslider{
                max-height: 600px;
            }
        }
    </style>
@endsection

@section('content')
    @if($content->menu_id != '0')
        <div class="full-title" style="background: url({{ Storage::url(\App\Models\Apartment::where('id','=',$content->apartment_id)->first()->image) }}) no-repeat center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    @else
         <div class="full-title">
    @endif
    <section class="py-5 bg-cover bg-gray">
        <div class="container py-5">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Product Detail</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <section class="py-5 bg-gray">
                        <div class="container py-5">
                            <h2 class="lined mb-4">Portfolio</h2>
                            <p class="lead">You can make also a portfolio or image gallery.</p>
                            <div class="row">
                                @foreach($datalist as $rs)
                                    <a href="" data-lightbox="gallery" data-title="Description of Project No.1" class="col-lg-4 col-sm-6 p-0">
                                        <img src="{{Storage::url($rs->image)}}" alt="" class="img-fluid">
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <div class="border-bottom my-4"></div>
        <h5 class="mb-4">2 Comments</h5>
        <div class="media mb-5"><img src="img/blog-avatar.jpg" alt="" width="100" class="rounded-circle">
            <div class="media-body ml-4">
                <h6 class="my-2">Julie Alma</h6>
                <p class="small text-muted"> <i class="far fa-clock mr-1"></i>September 23, 2011 at 12:00 am</p>
                <p class="text-small mb-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="#" class="text-small"><i class="fas fa-reply mr-2"></i>Reply</a>
            </div>
        </div>
        <div class="media mb-5"><img src="img/blog-avatar2.jpg" alt="" width="100" class="rounded-circle">
            <div class="media-body ml-4">
                <h6 class="my-2">Julie Alma</h6>
                <p class="small text-muted"> <i class="far fa-clock mr-1"></i>September 23, 2011 at 12:00 am</p>
                <p class="text-small mb-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="#" class="text-small"><i class="fas fa-reply mr-2"></i>Reply</a>
            </div>
        </div>
        <div class="border-bottom my-4"></div>
        <ul>
            <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
            <li>Aliquam tincidunt mauris eu risus.</li>
        </ul><img src="img/blog1.jpg" alt="Example blog post alt" class="img-fluid mb-4">
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
        <div class="border-bottom my-4"></div>
        <h5 class="mb-4">2 Comments</h5>
        <div class="media mb-5"><img src="img/blog-avatar.jpg" alt="" width="100" class="rounded-circle">
            <div class="media-body ml-4">
                <h6 class="my-2">Julie Alma</h6>
                <p class="small text-muted"> <i class="far fa-clock mr-1"></i>September 23, 2011 at 12:00 am</p>
                <p class="text-small mb-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="#" class="text-small"><i class="fas fa-reply mr-2"></i>Reply</a>
            </div>
        </div>
        <div class="media mb-5"><img src="img/blog-avatar2.jpg" alt="" width="100" class="rounded-circle">
            <div class="media-body ml-4">
                <h6 class="my-2">Julie Alma</h6>
                <p class="small text-muted"> <i class="far fa-clock mr-1"></i>September 23, 2011 at 12:00 am</p>
                <p class="text-small mb-4">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="#" class="text-small"><i class="fas fa-reply mr-2"></i>Reply</a>
            </div>
        </div>
        <div class="border-bottom my-4"></div>
        <h5 class="mb-4">Leave comment</h5>
        <form id="contact-form" method="post" action="contact.php" class="contact-form form">
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="name" class="font-weight-normal">Name <span class="text-primary">*</span></label>
                    <input id="name" type="text" name="name" required class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-6">
                    <label for="email" class="font-weight-normal">Email <span class="text-primary">*</span></label>
                    <input id="email" type="email" name="email" required class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="message" class="font-weight-normal">Comment <span class="text-primary">*</span></label>
                    <textarea id="message" rows="3" name="message" class="form-control"></textarea>
                </div>
                <div class="form-group col-lg-12 text-right">
                    <button type="submit" class="btn btn-outline-primary"> <i class="far fa-comment mr-2"> </i>Post comment</button>
                </div>
            </div>
        </form>
        </div>
        </div>
        </div>
    </section>

@endsection

