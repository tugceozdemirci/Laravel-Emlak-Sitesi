@extends('layouts.home')
@section('title', 'User Apartments')

@section('content')
    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">User Apartment</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-2">
                @include('home.usermenu')
                <div class="form-group col-lg-2">
                    <a href="{{route('user_apartment_add')}}"><button type="button" class="btn btn-outline-primary">Add Apartment</button></a>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                        <tr>
                            <th>id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th>Area</th>
                            <th>Location</th>
                            <th>Floor</th>
                            <th>Room</th>
                            <th>Bathroom</th>
                            <th>Balcony</th>
                            <th>Heating</th>
                            <th>Garden</th>
                            <th>Garage</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th colspan="2" > Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                                <td>{{$rs -> id}}</td>
                                <td>
                                    {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
                                </td>
                                <td>{{$rs -> title}} </td>
                                <td>{{$rs -> status}} </td>
                                <td>{{$rs -> price}} </td>
                                <td>{{$rs -> area}} </td>
                                <td>{{$rs -> location}} </td>
                                <td>{{$rs -> floor}} </td>
                                <td>{{$rs -> room}} </td>
                                <td>{{$rs -> bathroom}} </td>
                                <td>{{$rs -> balcony}} </td>
                                <td>{{$rs -> heating}} </td>
                                <td>{{$rs -> garden}} </td>
                                <td>{{$rs -> garage}} </td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('user_image_add',['apartment_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')" >
                                        <img src="{{asset('assets/admin/images')}}/gallery.png" height="25"> </a>
                                </td>
                                <td>
                                    <a href="{{route('user_apartment_edit',['id'=> $rs->id])}}">
                                        <img src="{{asset('assets/admin/images')}}/edit.png" height="25"> </a>
                                </td>
                                <td>
                                    <a href="{{route('user_apartment_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')">
                                        <img src="{{asset('assets/admin/images')}}/trash.png" height="25"> </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
