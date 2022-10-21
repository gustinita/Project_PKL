<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Kinerja Dosen</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')}}">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/bs-stepper/css/bs-stepper.min.css')}}">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/dropzone/min/dropzone.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="icon" href="{{asset('gambar/umbjm.png')}}">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
      </ul>
    </nav>
    <!-- /.navbar -->
    <ul class="navbar-nav">
      <li class="nav-item">
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <div class="navbar-search-block">
        <form class="form-inline">
          <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-navbar" type="submit">
                <i class="fas fa-search"></i>
              </button>
              <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </form>
      </div>
      </li>
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          </a>
        </div>
      </li>
    </ul>
    </nav>


    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link">
        <img src="{{asset('gambar/umbjm.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Laporan Kinerja Dosen</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="#" class="d-block">{{auth()->user()->name}}</a>
          </div>
        </div>

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="/beranda" class="nav-link">
                <i class="nav-icon fa fa-home"></i>
                <p>
                  Beranda
                </p>
              </a>
            </li>
            @if (auth()->user()->level=="admin")
          <li class="nav-item">
            <a href="/profiladmn" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Biodata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pngguna" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Pengguna
              </p>
            </a>
          </li>
          @endif
          @if(auth()->user()->level=="user")
          <li class="nav-item">
            <a href="/biodatadsn" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Biodata
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-landmark"></i>
              <p>
                Pelaks. Pendidikan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pengajaran" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengajaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/bimbmhs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bimbingan Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengmhs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengujian Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/vistscientist" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visiting Scientiest</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pembmhs" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembinaan Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/bahanajar" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bahan Ajar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/datasring" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Datasering</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/orasilmiah" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Orasi Ilmiah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pembdsn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pembimbing Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/tgstmbhn" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tugas Tambahan</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="/penelitian" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Penelitian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/pengabdian" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengabdian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/penunjang" class="nav-link">
              <i class="nav-icon far fa-bookmark"></i>
              <p>
                Penunjang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/laporan" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          @endif
          <li class="nav-item">
            <a href="{{route('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-unlock"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          </ul>
        </nav>
      </div>
    </aside>
    
    <div class="content-wrapper">
      @yield('content')
    </div>
    <footer class="main-footer">
      <!-- To the right -->
      <!-- Default to the left -->
      <strong>LAPORAN KINERJA DOSEN</strong>
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
  </div>
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
  <script src="plugins/chart.js/Chart.min.js"></script>
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
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('adminlte/dist/js/pages/dashboard.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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