<html>
<head>
    <title>Image Gallery</title>
    <!-- Bootstrap -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets') }}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets') }}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets') }}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets') }}/admin/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets') }}/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets') }}/admin/build/css/custom.min.css" rel="stylesheet">
    @yield('css')
    @yield('javascript')

</head>
<body>
            <div class="row">
                <form class="x_panel">
                    <div class="x_title">
                        <h3>Apartment: {{$data->title}}</h3>
                        <div class="clearfix"></div>
                    </div>
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
                                <br/>
                            </div>
                            <div class="clearfix"></div>
                            <div class="x_content">
                                <form action="{{route('admin_image_store' , ['apartment_id'=> $data->id ])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Title</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="title" class="form-control" placeholder="Default Input">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Image</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="file" name="image" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-sm-12" >
                                            <button type="submit" class="btn btn-success">Add Image</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <tr>
                                                    <th>id</th>
                                                    <th>Title</th>
                                                    <th>Image</th>
                                                    <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($images as $rs)
                                                        <tr>
                                                            <td>{{$rs -> id}}</td>
                                                            <td>{{$rs -> title}} </td>
                                                            <td>
                                                                @if($data -> image)
                                                                    <img src="{{ Storage::url($data -> image ) }}" height="50" alt="">
                                                                @endif
                                                            </td>
                                                            <td>
                                                                    <a href="{{route('admin_image_delete',['id'=> $rs->id, 'apartment_id'=> $data->id])}}" onclick="return confirm('Record will be Delete! Are you sure?')">
                                                                    <img src="{{asset('assets/admin/images')}}/trash.png" height="30"></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

</body>
</html>
