<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <title>iWater</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/9997/9997303.png" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="{{url('')}}/sleek-main/source/assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href="{{url('')}}/sleek-main/source/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href='{{url('')}}/sleek-main/source/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css' rel='stylesheet'>
    <link href='{{url('')}}/sleek-main/source/assets/plugins/daterangepicker/daterangepicker.css' rel='stylesheet'>
    <link href='{{url('')}}/sleek-main/source/assets/plugins/toastr/toastr.min.css' rel='stylesheet'>
    <link href="{{url('')}}/sleek-main/theme/assets/css/sleek.css" rel="stylesheet"/>
    <script src="{{url('')}}/sleek-main/source/assets/plugins/nprogress/nprogress.js"></script>
    <link href="{{url('')}}/sleek-main/theme/assets/plugins/data-tables/datatables.bootstrap4.min.css" rel="stylesheet">
</head>

<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
        NProgress.configure({ showSpinner: false });
        NProgress.start();
    </script>

    <div class="wrapper">

        <aside class="left-sidebar bg-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <div class="app-brand bg-transparent">
                    <a href="/">
                        <img src="https://cdn-icons-png.flaticon.com/512/9997/9997303.png" alt="Logo" style="height: 40px"/>

                        <span class="brand-name text-truncate">iWater</span>
                    </a>
                </div>

                <div class="" data-simplebar style="height: 100%;">
                    <ul class="nav sidebar-inner" id="sidebar-menu">

                        <li class="section-title pt-0">
                            Menu
                        </li>
                        <li class="@yield('home')">
                            <a class="sidenav-item-link" href="/home">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="@yield('meter')">
                            <a class="sidenav-item-link" href="{{ route('m.index') }}">
                                <i class="mdi mdi-speedometer"></i>
                                <span class="nav-text">Meter</span>
                            </a>
                        </li>

                        <li class="section-title">
                            Admin
                        </li>
                        <li class="@yield('users')">
                            <a class="sidenav-item-link" href="{{ route('users.index') }}">
                                <i class="mdi mdi-account-group-outline"></i>
                                <span class="nav-text">Users</span>
                            </a>
                        </li>
                        {{-- <li class="@yield('roles')">
                            <a class="sidenav-item-link" href="{{ route('roles.index') }}">
                                <i class="mdi mdi-account-question-outline"></i>
                                <span class="nav-text">Roles</span>
                            </a>
                        </li> --}}

                    </ul>
                </div>

                <div class="sidebar-footer">
                    <hr class="separator m-0" />
                    <div class="sidebar-footer-content text-center">
                        <p>
                        iWater &copy; <span id="copy-year"></span>
                        </p>
                        <script>
                            var d = new Date();
                            var year = d.getFullYear();
                            document.getElementById("copy-year").innerHTML = year;
                        </script>
                    </div>
                </div>
            </div>
        </aside>

        <div class="page-wrapper">
            <header class="main-header " id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <button id="sidebar-toggler" class="sidebar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                    </button>
                    <div class="search-form d-none d-lg-inline-block">
                    </div>
                    <div class="navbar-right ">
                        <ul class="nav navbar-nav">
                            <li class="dropdown user-menu">
                                <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-header">
                                        <div class="d-inline-block">
                                            {{ Auth::user()->name }} 
                                            <small class="pt-1">{{ Auth::user()->email }}</small>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="mdi mdi-logout"></i> Sign out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        
            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>

        </div> 
    </div> 

    <script src="{{url('')}}/sleek-main/source/assets/plugins/jquery/jquery.min.js"></script>
    <script src="{{url('')}}/sleek-main/source/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/sleek-main/source/assets/plugins/simplebar/simplebar.min.js"></script>
    <script src='{{url('')}}/sleek-main/theme/assets/plugins/charts/Chart.min.js'></script>
    <script src='{{url('')}}/sleek-main/theme/assets/js/chart.js'></script>
    <script src='{{url('')}}/sleek-main/source/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js'></script>
    <script src='{{url('')}}/sleek-main/source/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js'></script>
    <script src='{{url('')}}/sleek-main/source/js/vector-map.js'></script>
    <script src='{{url('')}}/sleek-main/source/assets/plugins/daterangepicker/moment.min.js'></script>
    <script src='{{url('')}}/sleek-main/source/assets/plugins/daterangepicker/daterangepicker.js'></script>
    <script src='{{url('')}}/sleek-main/theme/assets/js/date-range.js'></script>
    <script src='{{url('')}}/sleek-main/source/assets/plugins/toastr/toastr.min.js'></script>
    <script src="{{url('')}}/sleek-main/theme/assets/js/sleek.js"></script>
    <link href="{{url('')}}/sleek-main/source/assets/options/optionswitch.css" rel="stylesheet">
    <script src="{{url('')}}/sleek-main/source/assets/options/optionswitcher.js"></script>
    <script src="{{url('')}}/sleek-main/theme/assets/plugins/data-tables/jquery.datatables.min.js"></script>
    <script src="{{url('')}}/sleek-main/theme/assets/plugins/data-tables/datatables.bootstrap4.min.js"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"/> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.bootstrap5.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"></script>

    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('error') || $errors->any())
            toastr.error("{{ Session::get('error') ?? $errors->first() }}");
        @endif
    </script>
    @yield('script')
</body>
</html>

