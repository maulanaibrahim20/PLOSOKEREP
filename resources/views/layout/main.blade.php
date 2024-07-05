<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- CKEditor -->
  <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

  @yield('css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: blue">
    <a href=# class="brand-link">
      <span class="brand-text font-weight-light">Dashboard Admin</span>
    </a>
    <a href=# class="brand-link">
      <span class="brand-text font-weight-light">{{ auth()->user()->email}}</span>
    </a>

    <div class="sidebar mt-3 pb-3 mb-3 d-flex">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.pengaduan') }}" class="nav-link {{ request()->is('admin/pengaduan') ? 'active' : '' }}">
              <i class="nav-icon fas fa-exclamation-circle"></i>
              <p>Pengaduan Masyarakat</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.profildesa') }}" class="nav-link {{ request()->is('admin/profildesa') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Profil Desa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.datapenduduk') }}" class="nav-link {{ request()->is('admin/datapenduduk') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Penduduk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.manajemen_pengajuan_surat') }}" class="nav-link {{ request()->is('admin/manajemen_pengajuan_surat') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Surat Masuk</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.m_berita') }}" class="nav-link {{ request()->is('admin/m_berita') ? 'active' : '' }}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Berita Desa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.user') }}" class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>Data User</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.aparatur') }}" class="nav-link {{ request()->is('admin/aparatur') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>Aparatur Desa</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('lte/dist/js/demo.js') }}"></script>

@stack('js')
</body>
</html>
