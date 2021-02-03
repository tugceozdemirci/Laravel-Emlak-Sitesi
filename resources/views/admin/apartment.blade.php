@extends('layouts.admin')

@section('title', 'Apartment List')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Apartments</h3>
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
                            <a href="{{route('admin_apartment_add')}}" type="button" class="btn btn-success btn-xs">Add Apartment</a>
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
                                                                <a href="{{route('admin_image_add',['apartment_id'=> $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')" >
                                                                    <img src="{{asset('assets/admin/images')}}/gallery.png" height="25"> </a>
                                                            </td>
                                                            <td>
                                                                <a href="{{route('admin_apartment_edit',['id'=> $rs->id])}}">
                                                                <img src="{{asset('assets/admin/images')}}/edit.png" height="25"> </a>
                                                            </td>
                                                            <td>
                                                                <a href="{{route('admin_apartment_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')">
                                                                <img src="{{asset('assets/admin/images')}}/trash.png" height="25"> </a>
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
