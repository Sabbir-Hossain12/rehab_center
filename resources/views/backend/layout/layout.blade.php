<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dream House</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('public/backend/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href=" {{asset('public/backend')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href=" {{asset('public/backend')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href=" {{asset('public/backend')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('public/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/backend/dist/css/adminlte.min.css')}}">
   

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="" alt="AdminLTELogo" height="60" width="60">
    </div>

@include('backend.include.navbar')

@include('backend.include.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       @yield('contentHeader')
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            
                @yield('mainContents')
            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@include('backend.include.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('public/backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend/dist/js/adminlte.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src=" {{asset('public/backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/jszip/jszip.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src=" {{asset('public/backend')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src=" {{asset('public/backend')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('public/backend/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('public/backend/plugins/raphael/raphael.min')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-mapael/jquery.mapael.min')}}"></script>
<script src="{{asset('public/backend/plugins/jquery-mapael/maps/usa_states.min')}}"></script>
<!-- ChartJS -->
<script src="{{asset('public/backend/plugins/chart.js/Chart.min')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/backend/dist/js/pages/dashboard2.js')}}"></script>
</body>
</html>
        