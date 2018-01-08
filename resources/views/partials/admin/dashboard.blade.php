@guest

<!-- Login page -->

@else

<div id="app">
        <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="/adminpanel">Panel</a>
            </div>
            <!-- /.navbar-header -->
                       
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }}<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            {{ csrf_field() }}
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/adminpanel"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>
                        
                        <li>
                            <a href="/adminpanel/carousel"><i class="fa fa-list-alt"></i> Carousels</a>
                                <li>
                                    <a href="/adminpanel/addcarousel" class="fa fa-plus"> Add Carousels</a>
                                </li>
                        </li>
                        <li>
                            <a href="/adminpanel/services"><i class="fa fa-list-alt"></i> Services</a>
                                <li>
                                    <a href="/adminpanel/addservices" class="fa fa-plus">Add Services</a>
                                </li>
                        </li>
                        <li>
                            <a href="/adminpanel/social"><i class="fa fa-list-alt"></i> Social</a>
                                <li>
                                    <a href="/adminpanel/addsocial" class="fa fa-plus">Add Social</a>
                                </li>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="/adminpanel/subscriber"><i class="fa fa-list-alt"></i> Subscriber</a>

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('title')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> 
            @if(parse_url(url()->current(), PHP_URL_PATH) =='/adminpanel')  
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    
                                    <div class="huge">{{ $subscriberCounter }}</div>
                                    <div>Subscriber</div>
                                </div>
                                    
                            </div>
                        </div>
                        <a href="/adminpanel/subscriber">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $socialCounter }}</div>
                                    <div>Social Links</div>
                                </div>
                            </div>
                        </div>
                        <a href="/adminpanel/social">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $servicesCounter }}</div>
                                    <div>Services</div>
                                </div>
                            </div>
                        </div>
                        <a href="/adminpanel/services">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{ $carouselCounter }}</div>
                                    <div>Carousel</div>
                                </div>
                            </div>
                        </div>
                        <a href="/adminpanel/carousel">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            @endif
            <div class="row">
                <div class="col-lg-8">
                    @endguest

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>