@php
    $setting=\App\Http\Controllers\HomeController::getSetting()
@endphp
<footer style="background: #eee;" class="pt-4">
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" class="colomn">
                <h5 class="lined lined-dark mb-3">İletişim</h5>
                <p class="text-muted mb-0 text-small">{{$setting->email}}</p>
                <p class="text-muted mb-0 text-small">{{$setting->phone}}</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" class="colomn">
                <h5 class="lined lined-dark mb-3">Hakkımızda</h5>
                <li><a href="#" class="footer-link text-small">Üyelik Sözleşmesi</a>
                <li><a href="#" class="footer-link text-small">Gizlilik Politikası</a></li>
                <li><a href="{{route('references')}}" class="footer-link text-small">Referanslarımız</a></li>

            </div>
            <div class="col-lg-4 col-md-6 mb-4" class="colomn">
                <h5 class="lined lined-dark mb-3">Bizi Takip Edin!</h5>
                <ul class="list-inline">
                    @if ($setting->facebook != null) <li class="list-inline-item"><a href="{{$setting->facebook}}" class="social-link"> <img src="{{asset('assets/img')}}/facebook.png" height="30"> </a></li> @endif
                    @if ($setting->instagram != null) <li class="list-inline-item"><a href="{{$setting->instagram}}" class="social-link"><img src="{{asset('assets/img')}}/instagram.png" height="30" ></a></li> @endif
                    @if ($setting->twitter != null) <li class="list-inline-item"><a href="{{$setting->twitter}}" class="social-link"><img src="{{asset('assets/img')}}/twitter.png" height="30" ></a></li> @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left mb-1 mb-lg-0">
                    <p class="small text-gray mb-0">©2021 Best company</p>
                </div>
                <div class="col-lg-6 text-center text-lg-right">
                    <p class="small text-gray mb-0">Design by {{$setting->title}}</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- JavaScript files-->
<script src="{{asset('assets')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets')}}/vendor/lightbox2/js/lightbox.min.js"></script>
<script src="{{asset('assets')}}//leaflet/leaflet.js"></script>
<script src="{{asset('assets')}}/js/front.js"></script>
<link rel="stylesheet" href="{{asset('assets')}}/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="{{asset('assets')}}/https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
