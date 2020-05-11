<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>General | Administration</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/1stepservice.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark bg-nav">
<!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

<!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                </div>
            </div>
        </form>

<!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
<!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i><span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                    <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel<span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
            <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
            <!-- Message Start -->
                    <div class="media">
                    <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                John Pierce<span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">I got your message bro</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
            <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                    <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Nora Silvester<span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">The subject goes here</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages<span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests<span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 4 new reports<span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @if(Auth::guard('worker')->check())
                        Hi {{Auth::guard('worker')->user()->name}}
                    @elseif(Auth::guard()->check())
                        Hi {{Auth::guard()->user()->name}}
                    @elseif(Auth::guard('client')->check())
                        Hi {{Auth::guard('client')->user()->name}}
                    @endif
                        <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-orange elevation-4">
        <!-- Brand Logo -->
        <a href="" class="brand-link">
            <img src="{{ asset('./images/logo/logo2.png') }}" alt="1StepService Logo" class="brand-image img-circle elevation-3">
            <span class="brand-text font-weight-light">1StepService</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar mt-3">
<!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link bg-headers active"><i class="fas fa-users"></i> <p>Users<i class="right fas fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>New Super Manager</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin/workers') }}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>All Workers</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin/clients') }}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Clients</p></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active"><i class="fas fa-concierge-bell"></i> <p> Service Room<i class="right fas fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ asset('/admin/room-service/workers') }}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Workers</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin/room-service/products') }}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Products</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Other</p></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active"><i class="fas fa-concierge-bell"></i> <p> Restaurant<i class="right fas fa-angle-left"></i></p></a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('workers.index') }}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Workers</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ asset('/admin/restaurant/products') }}" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Products</p></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="far fa-circle nav-icon"></i><p>Other</p></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
<!-- /.sidebar-menu -->
        </div>
<!-- /.sidebar -->
    </aside>

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div>
            @yield('content')
        </div>
    </div>
<!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer navbar-dark">
        <div class="float-right d-none d-sm-inline">Code by: Miguel Cortez</div>
        <strong>Copyright &copy; 2020 1StepService. </strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

        <!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<!-- DataTables -->
<script src="{{asset('/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('/dist/js/adminlte.min.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- App -->
<script type="text/javascript" src="{{ asset('/js/clientsgenerator.js' )}}"></script>
<script type="text/javascript" src="{{ asset('/js/workerIsAdmin.js' )}}"></script>
<script type="text/javascript" src="{{ asset('/js/tables.js' )}}"></script>
{{-- <script type="text/javascript" src="{{ asset('/js/pusher.min.js' )}}"></script>
<script type="text/javascript" src="{{ asset('/js/pusher.js' )}}"></script> --}}
</body>
</html>
