@extends('layouts.admin')

@section('title', 'Add Product')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Product</h3>
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
                            <div class="col-md-6 ">
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
                                        <form class="form-horizontal form-label-left" action="{{route('admin_product_store')}}" method="post">
                                            @csrf
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Parent</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control" name="category_id">
                                                        <option value="0" selected="selected">Main Product</option>
                                                        @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">User_id</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="number" name="keywords" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Title</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="title" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3 ">Status</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control" name="status">
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Keywords</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="keywords" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Description</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="description" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Price</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="number" name="price" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Area</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="number" name="area" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Location</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="location" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Floor</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="number" name="floor" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Room</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="room" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3 ">Bathroom</label>
                                                <div class="col-md-9 col-sm-9 ">
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
                                                <label class="control-label col-md-3 col-sm-3 ">Balcony</label>
                                                <div class="col-md-9 col-sm-9 ">
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
                                                <label class="control-label col-md-3 col-sm-3 ">Heating</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control" name="heating">
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3 ">Garden</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control" name="garden">
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="control-label col-md-3 col-sm-3 ">Garage</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <select class="form-control" name="garage">
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">İmage</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="image" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-3 col-sm-3 ">Detail</label>
                                                <div class="col-md-9 col-sm-9 ">
                                                    <input type="text" name="detail" class="form-control" placeholder="Default Input">
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9  offset-md-3">
                                                    <button type="submit" class="btn btn-success">Add Product</button>
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
