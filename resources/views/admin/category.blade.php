@extends('layouts.admin')

@section('title', 'Category List')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Categories</h3>
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
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <a href="{{route('admin_category_add')}}" type="button" class="btn btn-success btn-xs">Add Category</a>
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
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                        <tr>
                                                            <th>id</th>
                                                            <th>Parent</th>
                                                            <th>Title(s)</th>
                                                            <th>Status</th>
                                                            <th colspan="2">Actions</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($datalist as $rs)
                                                        <tr>
                                                            <td>{{$rs -> id}} </td>
                                                            <td>{{$rs -> parent_id}} </td>
                                                            <td>{{$rs -> title}} </td>
                                                            <td>{{$rs -> status}} </td>
                                                            <td><a href="{{route('admin_category_edit',['id'=> $rs->id])}}">
                                                                    <img src="{{asset('assets/admin/images')}}/edit.png" height="25">
                                                                </a>
                                                            </td>
                                                            <td><a href="{{route('admin_category_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')">
                                                                    <img src="{{asset('assets/admin/images')}}/trash.png" height="25">
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
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

@section('footer')
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

@endsection
