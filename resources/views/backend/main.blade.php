<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | ABC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- App favicon -->
    <link rel="icon" type="image/png" href="{{asset('frontend/img/logo.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Plugins css -->
    <link href="{{asset('backend/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap css -->
    <link href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href="{{asset('backend/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href="{{asset('backend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src="{{asset('backend/js/head.js')}}"></script>
    <!-- Toggle Button -->
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        h2.heading {
            background: #0D4DA1;
            text-align: center;
            font-size: 26px;
            text-transform: uppercase;
            color: white;
            margin-top: 20px;
        }

        .d-print-none {
            margin-left: 20%
        }
    </style>

</head>

<body data-layout-mode="default" data-theme="light" data-layout-width="fluid" data-topbar-color="dark"
    data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        @include('backend.layouts.header')
        <!-- end Topbar -->
        <!-- ========== Left Sidebar Start ========== -->
        @include('backend.layouts.sidebar')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            @yield('content')
            <!-- content -->
            <!-- Footer Start -->
            @include('backend.layouts.footer')
            <!-- end Footer -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- Vendor js -->
    <script src="{{asset('backend/js/vendor.min.js')}}"></script>
    <!-- Plugins js-->
    <script src="{{asset('backend/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script src="{{asset('backend/libs/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/libs/selectize/js/standalone/selectize.min.js')}}"></script>
    <!-- Dashboard 1 init js-->
    <script src="{{asset('backend/js/pages/dashboard-1.init.js')}}"></script>
    <!-- App js-->
    <script src="{{asset('backend/js/app.min.js')}}"></script>
    <script src="{{asset('backend/js/status.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- Toggle Button-->
</body>

</html>