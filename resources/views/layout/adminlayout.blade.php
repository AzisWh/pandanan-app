<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
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

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          {{-- <a href="#" class="d-block">{{ Auth::user()->name;}}</a> --}}
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
            <li class="nav-item">
                <a href="/" target="_blank" class="nav-link">
                    <i class="nav-icon fa-solid fa-square-arrow-up-right"></i>
                  <p>
                    lihat web
                  </p>
                </a>
              </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-th"></i>
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/homepage')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Welcome Layout</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/paketjasa')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paket Jasa Card</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/layanan')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accordion Layanan Kami</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/faq')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/aboutus')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/visimisi')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi Misi Section</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('/blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog Section</p>
                </a>
              </li>
             
              
             
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fa-solid fa-address-book"></i>
              <p>
                Contact
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="/logout" class="nav-link">
                <i class="nav-icon fa-solid fa-right-from-bracket"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin View</h1>
          </div>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
                {{-- <h5 class="m-0">@yield('title')</h5> --}}
              </div>
              <div class="card-body">
               {{-- content --}}

               @yield('content')
               {{-- end content --}}

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; {{date('Y')}} <a href="#">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/lte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/lte/dist/js/adminlte.min.js"></script>
</body>
</html>
