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
                        <h3>User Detail</h3>
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
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Id</label>
                                                    <input class="form-control" value="{{ $user->id }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Name</label>
                                                    <input class="form-control" value="{{ $user->name }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Email</label>
                                                    <input class="form-control" value="{{ $user->email }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Phone</label>
                                                    <input class="form-control" value="{{ $user->phone }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Address</label>
                                                    <input class="form-control" value="{{ $user->address }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Created At</label>
                                                    <input class="form-control" value="{{ $user->created_at }}" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label mb-1">Roles</label>
                                                    <table>
                                                        <tr>
                                                            @foreach($user->roles as $row)
                                                                <td> {{ $row->name }} </td>
                                                                <td>
                                                                    <a href="{{ route('admin_user_role_delete', ['userid'=>$user->id, 'roleid'=>$row->id]) }}" onclick="return confirm('You are removing this role from the user! Are you sure?')">
                                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Remove">
                                                                            <i style="margin-right:15px; margin-left: 5px; font-size: 30px; color: indianred;" class="zmdi zmdi-delete"></i>
                                                                        </button>
                                                                    </a>
                                                                </td>
                                                                <td></td>
                                                            @endforeach
                                                        </tr>
                                                    </table>
                                                </div>
                                                <form action="{{ route('admin_user_role_add', ['id'=>$user->id]) }}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group">
                                                        <select class="form-control" name="roleid">
                                                            @foreach($rolelist as $rs)
                                                                <option value="{{ $rs->id }}">{{ $rs->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <br>
                                                        <button id="add-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                            <i class="fa fa-lg"></i>&nbsp;
                                                            <span>Add Role</span>
                                                        </button>
                                                    </div>
                                                </form>
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
