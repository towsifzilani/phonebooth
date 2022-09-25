<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} |  @yield('title')</title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/project/images/favicon.ico') }}">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
        @php $load_datatable=false;@endphp
        @if($load_datatable)
            <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/datatables.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/DataTables-1.10.25/css/dataTables.bootstrap5.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/ColReorder-1.5.4/css/colReorder.bootstrap5.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/Buttons-1.7.1/css/buttons.bootstrap5.min.css') }}">
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
        @endif

        <link rel="stylesheet" href="{{ asset('assets/vendors/datetimepicker/jquery.datetimepicker.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.6/sweetalert2.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ asset('assets/vendors/chocolat/css/chocolat.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/prism/prism.css') }}">

        <!-- Styles -->
        {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

        <!-- Scripts -->
        {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}


        <!-- themes assets -->
        <!-- Pignose Calender -->
        <link href="{{ asset('assets/theme/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="{{ asset('assets/theme/plugins/chartist/css/chartist.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/theme/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
        <!-- Custom Stylesheet -->
        <link href="{{ asset('assets/theme/css/style.css') }}" rel="stylesheet">
        <!-- themes assets -->

        @stack('css-header')
        @stack('js-header')
    </head>
    <body class="font-sans antialiased">
        <!--*******************
            Preloader start
        ********************-->
<!--         <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div> -->
        <!--*******************
            Preloader end
        ********************-->

        
        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">

            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="{{ url('') }}" class="text-center">
                        <b class="logo-abbr"><img src="{{ asset('assets/project/images/logo.png') }}" alt=""> </b>
                        <span class="logo-compact"><img src="{{ asset('assets/project/images/logo.png') }}" alt=""></span>
                        <span class="brand-title">
                            <img width="90px" height="90px" src="{{ asset('assets/project/images/logo.png') }}" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
                Header start
            ***********************************-->
            <div class="header">    
                <div class="header-content clearfix">
                    
                    <div class="nav-control">
                        <div class="hamburger">
                            <span class="toggle-icon"><i class="icon-menu"></i></span>
                        </div>
                    </div>
                    <div class="header-left">
                        <div class="input-group icons">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                            </div>
                            <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                            <div class="drop-down animated flipInX d-md-none">
                                <form action="#">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="header-right">
                        <ul class="clearfix">
                            <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span class="badge badge-pill gradient-1">3</span>
                                </a>
                                <div class="drop-down animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-heading d-flex justify-content-between">
                                        <span class="">3 New Messages</span>  
                                        <a href="javascript:void()" class="d-inline-block">
                                            <span class="badge badge-pill gradient-1">3</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Saiful Islam</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Adam Smith</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Can you do me a favour?</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Barak Obama</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                    <div class="notification-content">
                                                        <div class="notification-heading">Hilari Clinton</div>
                                                        <div class="notification-timestamp">08 Hours ago</div>
                                                        <div class="notification-text">Hello</div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                    <i class="mdi mdi-bell-outline"></i>
                                    <span class="badge badge-pill gradient-2">3</span>
                                </a>
                                <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                    <div class="dropdown-content-heading d-flex justify-content-between">
                                        <span class="">2 New Notifications</span>  
                                        <a href="javascript:void()" class="d-inline-block">
                                            <span class="badge badge-pill gradient-2">5</span>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Events near you</h6>
                                                        <span class="notification-text">Within next 5 days</span> 
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Event Started</h6>
                                                        <span class="notification-text">One hour ago</span> 
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Event Ended Successfully</h6>
                                                        <span class="notification-text">One hour ago</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Events to Join</h6>
                                                        <span class="notification-text">After two days</span> 
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        
                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown d-none d-md-flex">
                                <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                    <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                                </a>
                                <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li><a href="javascript:void()">English</a></li>
                                            <li><a href="javascript:void()">Dutch</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="icons dropdown">
                                <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                    <span class="activity active"></span>
                                    <img src="images/user/1.png" height="40" width="40" alt="">
                                </div>
                                <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void()">
                                                    <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                                </a>
                                            </li>
                                            
                                            <hr class="my-2">
                                            <li>
                                                <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                            </li>
                                            <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            <div class="nk-sidebar">           
                <div class="nk-nav-scroll">
                    <ul class="metismenu" id="menu">
                        <!-- <li class="nav-label">Dashboard</li> -->
                        <li class="">
                            <a class="" href="{{ route('dashboard') }}">
                                <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="mega-menu mega-menu-sm">
                            <a class="has-arrow" href="#" aria-expanded="false">
                                <i class="icon-grid menu-icon"></i> <span class="nav-text">Settings</span>
                            </a>
                            <ul aria-expanded="false">
                                <li><a href="./layout-blank.html">General Settings</a></li>
                                <li><a href="./layout-blank.html">Phonebook Settings</a></li>
                                <li><a href="./layout-blank.html">User Settings</a></li>
                            </ul>
                        </li>
                        <li><a href="./index.html"><i class="icon-book-open menu-icon"></i> <span class="nav-text">Phonebook</span></a></li>
                        <li><a href="./index.html"><i class="icon-envelope menu-icon"></i> <span class="nav-text">Message Templates</span></a></li>
                        <!-- <li><a href="./index.html"><i class="icon-grid menu-icon"></i> <span class="nav-text">Settings</span></a></li> -->
                    </ul>
                </div>
            </div>
            <!--**********************************
                Sidebar end
            ***********************************-->

            <!--**********************************
                Content body start
            ***********************************-->
            <div class="content-body">

                <div class="container-fluid mt-3">
                    @yield('content')
                </div>
                <!-- #/ container -->
            </div>
            <!--**********************************
                Content body end
            ***********************************-->
            
            
            <!--**********************************
                Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
                </div>
            </div>
            <!--**********************************
                Footer end
            ***********************************-->
        </div>
        <!--**********************************
            Main wrapper end
        ***********************************-->

        <script src="{{ asset('assets/vendors/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/nicescroll/jquery.nicescroll.min.js') }}"></script>
        <script src="{{ asset('assets/js/main.js') }}"></script>

        @if($load_datatable)
            <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/datatables/datatables.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/datatables/DataTables-1.10.25/js/dataTables.bootstrap5.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/datatables/ColReorder-1.5.4/js/colReorder.bootstrap5.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/datatables/Buttons-1.7.1/js/dataTables.buttons.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/datatables/Buttons-1.7.1/js/buttons.bootstrap5.min.js') }}"></script>
            {{--<script src="{{ asset('assets/vendors/datatables/JSZip-2.5.0/jszip.min.js') }}"></script>--}}
            {{--<script src="{{ asset('assets/vendors/datatables/pdfmake-0.1.36/pdfmake.min.js') }}"></script>--}}
            {{--<script src="{{ asset('assets/vendors/datatables/pdfmake-0.1.36/vfs_fonts.js') }}"></script>--}}
            <script src="{{ asset('assets/vendors/datatables/Buttons-1.7.1/js/buttons.html5.min.js') }}"></script>
            {{--<script src="{{ asset('assets/vendors/datatables/Buttons-1.7.1/js/buttons.print.min.js') }}"></script>--}}
            <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        @endif

        <script src="{{ asset('assets/vendors/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.6/sweetalert2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script src="{{ asset('assets/vendors/chocolat/js/jquery.chocolat.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/prism/prism.js') }}"></script>


        <!--**********************************
            Scripts
        ***********************************-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('assets/theme/plugins/common/common.min.js') }}"></script>
        <script src="{{ asset('assets/theme/js/custom.min.js') }}"></script>
        <script src="{{ asset('assets/theme/js/settings.js') }}"></script>
        <script src="{{ asset('assets/theme/js/gleek.js') }}"></script>
        <script src="{{ asset('assets/theme/js/styleSwitcher.js') }}"></script>

        <!-- Chartjs -->
        <script src="{{ asset('assets/theme/plugins/chart.js/Chart.bundle.min.js') }}"></script>
        <!-- Circle progress -->
        <script src="{{ asset('assets/theme/plugins/circle-progress/circle-progress.min.js') }}"></script>
        <!-- Datamap -->
        <script src="{{ asset('assets/theme/plugins/d3v3/index.js') }}"></script>
        <script src="{{ asset('assets/theme/plugins/topojson/topojson.min.js') }}"></script>
        <script src="{{ asset('assets/theme/plugins/datamaps/datamaps.world.min.js') }}"></script>
        <!-- Morrisjs -->
        <script src="{{ asset('assets/theme/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/theme/plugins/morris/morris.min.js') }}"></script>
        <!-- Pignose Calender -->
        <script src="{{ asset('assets/theme/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('assets/theme/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
        <!-- ChartistJS -->
        <script src="{{ asset('assets/theme/plugins/chartist/js/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/theme/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>



        <script src="{{ asset('assets/theme/js/dashboard/dashboard-1.js') }}"></script>


        @stack('css-footer')
        @stack('js-footer')
    </body>
</html>
