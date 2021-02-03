@extends('layouts.admin')

@section('title', 'Edit Apartment')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Apartment</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-12 ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                </div>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <form class="form-horizontal form-label-left" action="{{route('admin_apartment_update', ['id'=> $data -> id ])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Category</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <select class="form-control" name="category_id">
                                                        @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif > {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Title</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="text" name="title" class="form-control" placeholder="Default Input" value="{{$data->title}}">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Keywords</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <textarea name="keywords" id="editor1" class="ckeditor">{{$data->keywords}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Description</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <textarea name="description" id="editor1" class="ckeditor">{{$data->description}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Detail</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <textarea name="detail" id="editor1" class="ckeditor">{{$data->detail}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Price</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="text" name="budget" class="form-control" value="{{$data->price}}" placeholder="Default Input" value="0">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Area</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="number" name="area" class="form-control" placeholder="Default Input" value="{{$data->area}}">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Location</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="text" name="location" class="form-control" placeholder="Default Input" value="{{$data->location}}">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Floor</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="number" name="floor" class="form-control" placeholder="Default Input" value="{{$data->floor}}">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Room</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="text" name="room" class="form-control" placeholder="Default Input" value="{{$data->room}}">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-1 col-sm-1 ">Bathroom</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <select class="form-control" name="bathroom">
                                                        <option selected="selected">Not</option>
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
                                                        <option selected="selected">Not</option>
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
                                                        <option selected="selected">True</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-1 col-sm-1 ">Garden</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <select class="form-control" name="garden">
                                                        <option selected="selected">True</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-1 col-sm-1 ">Garage</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <select class="form-control" name="garage">
                                                        <option selected="selected">True</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-1 col-sm-1 ">Status</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <select class="form-control" name="status">
                                                        <option selected="selected">True</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Image</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="file" name="image" class="form-control" placeholder="Default Input" >
                                                </div>
                                                @if ($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" height="60" alt="">
                                                @endif
                                            </div>

                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <button type="submit" class="btn btn-success">Update Apartment</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

@endsection
