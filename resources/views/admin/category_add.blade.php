@extends('layouts.admin')

@section('title', 'Add Category')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Category</h3>
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
                <div class="col-md-12">
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
                                        <form class="form-horizontal form-label-left" action="{{route('admin_category_create')}}" method="post">
                                            @csrf
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Parent</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <select class="form-control" name="parent_id">
                                                        <option value="0" selected="selected">Main Category</option>
                                                        @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Title</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <textarea name="title" id="editor1" class="ckeditor"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Keywords</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <textarea  name="keywords" id="editor1" class="ckeditor"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Description</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <textarea name="description" id="editor1" class="ckeditor"></textarea>
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
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <button type="submit" class="btn btn-success">Add Category</button>
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
