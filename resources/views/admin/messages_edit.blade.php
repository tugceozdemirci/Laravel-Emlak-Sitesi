<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Message Detail</h3>
                @include('home.message')
            </div>
        </div>
        <div class="x_content">
            <div class="col-md-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" action="{{route('admin_message_update', ['id' => $data -> id ])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row ">
                                <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                    <tr>
                                        <th>Id</th> <td>{{$data -> id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th> <td>{{$data -> firstname}} </td>
                                    </tr>
                                    <tr>
                                        <th>Surname</th> <td>{{$data -> lastname}} </td>
                                    </tr>
                                    <tr>
                                        <th>Email</th> <td>{{$data -> email}} </td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th> <td>{{$data -> subject}} </td>
                                    </tr>
                                    <tr>
                                        <th>Message</th> <td>{{$data -> message}} </td>
                                    </tr>
                                    <tr>
                                        <th>Admin Note</th>
                                        <td>
                                            <textarea id="note" name="note">{{$data -> note}}</textarea>
                                        </td>
                                    </tr>
                                </tr>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-12 col-sm-12" >
                                    <button type="submit" class="btn btn-success">Update Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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




