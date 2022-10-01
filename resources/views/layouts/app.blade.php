<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }} |  @yield('title')</title>
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/project/images/favicon.ico') }}">

        <!-- ---------- -
        -- Themes section--
        -- ---------- -->
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{ asset('assets/theme/vendors/iconfonts/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/theme/vendors/css/vendor.bundle.base.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/theme/vendors/css/vendor.bundle.addons.css') }}">
        <!-- endinject -->
        <!-- plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="{{ asset('assets/theme/css/style.css') }}">
        <!-- endinject -->
        <link rel="shortcut icon" href="http://www.urbanui.com/" />
        <!-- ---------- -
        -- Themes section--
        -- ---------- -->

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/DataTables-1.10.25/css/dataTables.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/ColReorder-1.5.4/css/colReorder.bootstrap5.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/datatables/Buttons-1.7.1/css/buttons.bootstrap5.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

        <link rel="stylesheet" href="{{ asset('assets/vendors/datetimepicker/jquery.datetimepicker.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.6/sweetalert2.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link rel="stylesheet" href="{{ asset('assets/vendors/chocolat/css/chocolat.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendors/prism/prism.css') }}">


        @stack('css-header')
        @stack('js-header')
    </head>
    <body class="font-sans antialiased">

          <div class="container-scroller">
                <!-- partial:partials/_navbar.html -->
                @include('included.navbar')
                <!-- partial -->
                @include('included.sidebar')
                <!-- partial:partials/_sidebar.html -->
              <!-- partial -->
              <div class="main-panel">
                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                  <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
                  </div>
                </footer>
                <!-- partial -->
              </div>
              <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
          </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- plugins:js -->
        <script src="{{ asset('assets/theme/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ asset('assets/theme/vendors/js/vendor.bundle.addons.js') }}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page-->
        <!-- End plugin js for this page-->
        <!-- inject:js -->
        <script src="{{ asset('assets/theme/js/off-canvas.js') }}"></script>
        <script src="{{ asset('assets/theme/js/hoverable-collapse.js') }}"></script>
        <script src="{{ asset('assets/theme/js/misc.js') }}"></script>
        <script src="{{ asset('assets/theme/js/settings.js') }}"></script>
        <script src="{{ asset('assets/theme/js/todolist.js') }}"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="{{ asset('assets/theme/js/dashboard.js') }}"></script>
        <!-- End custom js for this page-->

        <script src="{{ asset('assets/vendors/popper/popper.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/nicescroll/jquery.nicescroll.min.js') }}"></script>

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

        <script src="{{ asset('assets/vendors/datetimepicker/build/jquery.datetimepicker.full.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.15.6/sweetalert2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script src="{{ asset('assets/vendors/chocolat/js/jquery.chocolat.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/prism/prism.js') }}"></script>


        <!--**********************************
            Scripts
        ***********************************-->


        @stack('css-footer')
        @stack('js-footer')
    </body>
</html>
