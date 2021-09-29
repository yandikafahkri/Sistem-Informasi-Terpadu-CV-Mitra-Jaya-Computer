<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SISTEM INFORMASI TERPADU MJC</title>

  <link rel="icon" type="image/png" sizes="96x96" href="{{asset('adminlte/dist/img/mjc.png')}}" width="100%">

  <!-- Tell the browser to be responsive to screen width -->
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/jqvmap/jqvmap.min.css')}}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> 

<!-- ----------------------             TABEL                  ------------------- -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">

</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- ________________________________________________________________________________________________ -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
      <!-- Button trigger modal -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link" href="#" role="button" data-toggle="modal"
        data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900" ></i>
          <span class="mr-2 d-none d-lg-inline text-gray-900">Logout</span>
        </a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-3">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <div class="nav-item has-treeview menu-open text-center">
          <a href="{{ url('/') }}" class="nav-link">
            <i class="brand-text">
              <img src="{{asset('style/images/MJCpng.png')}}" alt="Logo" class="brand-image"
              style="width: 150px;">
            </i>
          </a>
        </div>

        <hr class="text-white">

        <div class="nav-item has-treeview text-center">
          <a href="#" class="d-block">{{auth()->user()->name}}</a>
        </div>
        <div class="nav-item has-treeview text-center">
          <a href="#" class="d-block"><b>({{auth()->user()->jabatan}})</b></a>
        </div>
        <div class="nav-item has-treeview text-center">
          <i class="text-muted">level akun : {{auth()->user()->level}}</i>
        </div>


        <hr class="text-white">
        <ul class="nav nav-pills nav-sidebar flex-column border border-info py-2 rounded" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-video"></i>
                  <p>
                    Data CCTV
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview  border-info py-1 rounded text-sm">
                  <li class="nav-item right">
                    <a href="{{ url('/inventaris') }}" class="nav-link">
                      <i class="nav-icon fas fa-list float-right"></i>
                      <p>- List Data CCTV</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('inventaris') }}/{{('maint')}}" class="nav-link">
                      <i class="nav-icon fas fa-check float-right"></i>
                      <p>- Maintenance CCTV</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{ url('/profile') }}" class="nav-link">
                  <i class="nav-icon fas fa-building"></i>
                  <p>
                    Profile Perusahaan
                  </p>
                </a>
              </li>

              @if (auth()->user()->level=='administrator')
              <li class="nav-item">
                <a href="{{ url('/karyawan') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    Data Pegawai
                  </p>
                </a>
              </li>
              @endif

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-cogs"></i>
                  <p>
                    All About
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview  border-info py-2 rounded text-sm">
                  <li class="nav-item">
                    <a href="{{ url('/website') }}" class="nav-link">
                      <i class="nav-icon fas fa-globe float-right"></i>
                      <p>- Website</p>
                    </a>
                  </li>
                  <li class="nav-item right">
                    <a href="{{ url('/author') }}" class="nav-link">
                      <i class="nav-icon fas fa-user-secret float-right"></i>
                      <p>- Author</p>
                    </a>
                  </li>
                </ul>
              </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->

    </div>
    <div class="menu-open text-center">
        <i class="brand-text">
          supported by : 
          <img src="{{asset('style/images/pelindo3.png')}}" alt="Logo" class="brand-image"
          style="width: 120px;">
        </i>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

          <!-- Modal  -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Profile MJC</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">

                  <img src="{{asset('adminlte/dist/img/mjc.png')}}" width="100%" class="user-image" alt="User Image">

                </div>

                <div class="modal-footer">
                  <a href="{{url('profile')}}" class="btn btn-primary"><i class="lnr lnr-user"></i> <span>Profile MJC</span></a>
                  <a href="{{url('profile-admin')}}" class="btn btn-primary"><i class="lnr lnr-user"></i> <span>Profile Admin</span></a>
                </div>

              </div>
            </div>
          </div>


@yield('content')


  </div>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Keluar dari Aplikasi?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout untuk mengakhiri sesi"</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{url('logout')}}"">Logout</a>
        </div>
      </div>
    </div>
  </div>





  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong><a href="{{url('profile')}}">Mitra Jaya Computer</a>.</strong>
    Kota Semarang
    <div class="float-right d-none d-sm-inline-block">
    </div>
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/dist/js/demo.js')}}"></script>


<!-- ----------------------             TABEL                  ------------------- -->
<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- bs-custom-file-input -->
  <script src="{{asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>

<!-- DataTables -->
<script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

  <script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
  </script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>





</body>
</html>
