@extends('layouts.home')

@section('title', $setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)

@section('content')
    <section class="py-5">
            <div class="container py-5">
                 <h2 class="mb-4">Arama</h2>
               <p class="lead">Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
                <p class="text-small">Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.</p><a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
            </div>
    </section>
    <section class="bg-gray py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0"><a href="#" class="d-block"><img src="{{asset('assets')}}/img/blog1.jpg" alt="" class="img-fluid mb-4"></a>
                    <h3 class="h5 mb-4"><a href="#" class="text-dark">Ücretsiz ilan ver</a></h3>
                    <p class="text-small">ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p><a href="#" class="btn btn-outline-primary btn-sm">Continue reading</a>
                </div>
                <div class="col-lg-4"><a href="#" class="d-block"><img src="{{asset('assets')}}/img/blog3.jpg" alt="" class="img-fluid mb-4"></a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container py-5">
            <h2 class="mb-5">Şehirler</h2>
            <div class="row mb-2">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="icon mb-4"><i class="pe-7s-alarm"></i></div>
                    <h5 class="lined mb-4">Webdesign</h5>
                    <p class="text-muted text-small">Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="icon mb-4"><i class="pe-7s-cloud"></i></div>
                    <h5 class="lined mb-4">Print</h5>
                    <p class="text-muted text-small">Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="icon mb-4"><i class="pe-7s-coffee"></i></div>
                    <h5 class="lined mb-4">SEO and SEM</h5>
                    <p class="text-muted text-small">Am terminated it excellence invitation projection as. She graceful shy.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
