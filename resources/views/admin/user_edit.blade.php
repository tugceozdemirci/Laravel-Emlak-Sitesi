@extends('layouts.admin')

@section('title', 'Edit User')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit User</h3>
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
                                        <form class="form-horizontal form-label-left" action="{{route('admin_user_update', ['id'=> $user -> id ])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Name</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="text" name="name" class="form-control" placeholder="Default Input" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">E-mail</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="text" name="email" class="form-control" placeholder="Default Input" value="{{$user->name}}">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Phone</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="text" name="phone" class="form-control" placeholder="Default Input" value="{{$user->phone}}">
                                                </div>
                                            </div>
                                            <div class="form-group row ">
                                                <label class="control-label col-md-1 col-sm-1 ">Address</label>
                                                <div class="col-md-11 col-sm-11 ">
                                                    <input type="text" name="address" class="form-control" value="{{$user->address}}" placeholder="Default Input" >
                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-12 col-sm-12">
                                                    <button type="submit" class="btn btn-success">Update User</button>
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