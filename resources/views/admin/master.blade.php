<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

  <!-- CSS Start -->
        @include('admin.includes.partials.stylesheets')
    <!-- CSS End -->

    <link rel="shortcut icon" href="{{ asset('frontEnd/images/favicon.ico')}}">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
    @include('admin.includes.navber')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.includes.mainSidebar')
  <!-- /.Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
    @include('admin.includes.contentHeader')
    <!-- /.content-header -->

    <!-- Main content -->
     @yield('mainContent')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.includes.footer')
  <!-- /.Main Footer -->
  
<!-- ./wrapper -->

    <!-- js Start -->    
    @include('admin.includes.partials.scripts')
    <!-- js End -->

</body>
</html>
