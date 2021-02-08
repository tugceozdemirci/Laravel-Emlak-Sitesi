<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a href="{{ route('admin_category') }}"><i class="fa fa-table"></i> Category </a></li>
            <li><a href="{{route('admin_apartments')}}"><i class="fa fa-desktop"></i> Apartments </a></li>
            <li><a href="{{route('admin_message')}}"><i class="fa fa-edit"></i> Contact Messages</a></li>
        </ul>
    </div>

</div>
<!-- /sidebar menu -->

<!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a href="{{route('admin_setting')}}" data-toggle="tooltip" data-placement="top" title="Settings">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
        </a>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{route('admin_logout')}}">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>
<!-- /menu footer buttons -->
</div>
</div>

<!-- top navigation -->
<div class="top_nav">
    @auth()
        <div class="nav_menu">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                    <li class="nav-item dropdown open" style="padding-left: 15px;">
                        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('assets')}}/admin/production/images/img.jpg" alt="" class="d-block">{{Auth::user()->name}} </a>
                        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item"  href="javascript:;"> Profile</a>
                            <a class="dropdown-item"  href="{{route('admin_setting')}}">
                                <span>Settings</span>
                            </a>
                            <a class="dropdown-item"  href="javascript:;">Help</a>
                            <a class="dropdown-item"  href="{{route('admin_logout')}}"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </div>
                    </li>

                    <li role="presentation" class="nav-item dropdown open">
                        <a href="{{route('admin_message')}}" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-green">6</span>
                        </a>
                        <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="{{ asset('assets')}}/admin/production/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>{{Auth::user()->name}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="{{ asset('assets')}}/admin/production/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>{{Auth::user()->name}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="{{ asset('assets')}}/admin/production/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>{{Auth::user()->name}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="dropdown-item">
                                    <span class="image"><img src="{{ asset('assets')}}/admin/production/images/img.jpg" alt="Profile Image" /></span>
                                    <span>
                          <span>{{Auth::user()->name}}</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                    <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="text-center">
                                    <a class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    @endauth
</div>
<!-- /top navigation -->
