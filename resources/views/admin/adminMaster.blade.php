<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Excelitai</title>
    @include('admin.body.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->

 @include('admin.body.header')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0b2f52">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- SidebarSearch Form -->
      <!-- Sidebar Menu -->
    @include('admin.body.sidebar')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
 @yield('admin')
  <!-- /.content-wrapper -->
 @include('admin.body.footer')
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
@include('admin.body.script')

</body>
</html>
