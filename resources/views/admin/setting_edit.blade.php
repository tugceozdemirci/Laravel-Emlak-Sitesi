@extends('layouts.admin')

@section('title', 'Edit Setting')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Setting</h3>
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

            <div class="">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2><i class="fa fa-bars"></i> Settings </h2>
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
                        <form class="form-horizontal form-label-left" action="{{route('admin_setting_update', ['id'=> $setting -> id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                        <div class="x_content">

                            <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="smtp-tab" data-toggle="tab" href="#smtp" role="tab" aria-controls="smtp" aria-selected="false">Smtp Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="aboutus-tab" data-toggle="tab" href="#aboutus" role="tab" aria-controls="aboutus" aria-selected="false">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact Page</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="reference-tab" data-toggle="tab" href="#references" role="tab" aria-controls="references" aria-selected="false">References</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Title</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="title" class="form-control" value="{{$setting->title}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Keywords</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="keywords" class="form-control" value="{{$setting->keywords}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Description</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="description" class="form-control" value="{{$setting->description}}">                                              </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Company</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="company" class="form-control" value="{{$setting->company}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Address</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="address" class="form-control" value="{{$setting->address}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Phone</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="phone" class="form-control" value="{{$setting->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Fax</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="fax" class="form-control" value="{{$setting->fax}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">E-mail</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="email" class="form-control" value="{{$setting->email}}">
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
                                </div>
                                <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Smtp Server</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="smtpserver" class="form-control" value="{{$setting->smtpserver}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Smtp E-mail</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="smtpemail" class="form-control" value="{{$setting->smtpemail}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Smtp Password</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="password" name="smtppassword" class="form-control" value="{{$setting->smtppassword}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Smtp Port</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="number" name="smtpport" class="form-control" value="{{$setting->smtpport}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Facebook</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="facebook" class="form-control" value="{{$setting->facebook}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Instagram</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="instagram" class="form-control" value="{{$setting->instagram}}">
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Twitter</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <input type="text" name="twitter" class="form-control" value="{{$setting->twitter}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="aboutus" role="tabpanel" aria-labelledby="aboutus-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">About Us</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <textarea name="aboutus" id="editor1" class="ckeditor">{{$setting->aboutus}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1 col-sm-1 ">Contact</label>
                                        <div class="col-md-11 col-sm-11 ">
                                            <textarea name="contact" id="editor1" class="ckeditor">{{$setting->contact}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="references-tab">
                                    <div class="form-group row ">
                                        <label class="control-label col-md-1">References</label>
                                        <div class="col-md-11">
                                            <textarea name="references" id="editor1" class="ckeditor">{{$setting->references}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-success">Update Setting</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


@endsection





