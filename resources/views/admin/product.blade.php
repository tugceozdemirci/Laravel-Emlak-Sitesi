@extends('layouts.admin')

@section('title', 'Product List')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Products</h3>
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
                            <a href="{{route('admin_product_add')}}" type="button" class="btn btn-success btn-xs">Add Product</a>
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
                                                            <th>User id</th>
                                                            <th>Title(s)</th>
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
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @foreach($datalist as $rs)
                                                        <tr>
                                                            <td>{{$rs -> id}} </td>
                                                            <td>{{$rs -> parent_id}}</td>
                                                            <td>{{$rs->user_id}}</td>
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
                                                            <td>{{$rs -> image}} </td>
                                                            <td><a href="{{route('admin_product_edit',['id'=> $rs->id])}}"> Edit </a></td>
                                                            <td> <a href="{{route('admin_product_delete', ['id'=> $rs->id])}}" onclick="return confirm('Delete! Are you sure?')"> Delete </a></td>
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
    <script function() {
            $('').DataTable();
    }


    @endsection
