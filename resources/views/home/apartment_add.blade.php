@extends('layouts.home')
@section('title', 'User Apartments')

@section('content')
    <section class="py-1 bg-cover bg-gray">
        <div class="container py-1">
            <div aria-label="breadcrumb" class="nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li aria-current="page" class="breadcrumb-item active">Add Apartment</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group ">
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="{{route('user_apartment_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Category</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Title</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="text" name="title" class="form-control" placeholder="Default Input">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Keywords</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <textarea name="keywords" id="editor1" class="ckeditor"></textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Description</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <textarea name="description" id="editor1" class="ckeditor"></textarea>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Detail</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <textarea name="detail" id="editor1" class="ckeditor"></textarea>                                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Price</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="number" name="price" class="form-control" placeholder="Default Input" value="0">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Area</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="number" name="area" class="form-control" placeholder="Default Input" value="0">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Location</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="text" name="location" class="form-control" placeholder="Default Input">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Floor</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="number" name="floor" class="form-control" placeholder="Default Input" value="0">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Room</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="text" name="room" class="form-control" placeholder="Default Input">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-1 col-sm-1 ">Bathroom</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="bathroom">
                                        <option>Not</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-1 col-sm-1 ">Balcony</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="balcony">
                                        <option>Not</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-1 col-sm-1 ">Heating</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="heating">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-1 col-sm-1 ">Garden</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="garden">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-1 col-sm-1 ">Garage</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="garage">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-1 col-sm-1 ">Status</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="control-label col-md-1 col-sm-1 ">Image</label>
                                <div class="col-md-11 col-sm-11 ">
                                    <input type="file" name="image" class="form-control" placeholder="Default Input">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-success">Add Apartment</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

