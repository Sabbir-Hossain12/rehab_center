
@include('backend.include.meta-tags')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

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

   @include('backend.include.scripts')

</body>
</html>
