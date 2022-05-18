<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>New</title>
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Ajax -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
         <!-- Select2 -->
         <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
 
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.0/css/all.min.css">
  <!-- <link rel="stylesheet" href="{{ asset('css/all.css') }}"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
  
  <style>
    .hidden {
      display: none;
    }
    .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #17a2b8;
    color: #fff;
}
.brand-link {
  padding-top: 0.1rem;
  padding-bottom: 0;
}
.nav-sidebar .nav-header {
  font-size: 0.9rem;
  padding: .5rem .75rem;
}
 .main-header .nav-link {
    height: 1.9rem;
}
footer.main-footer {
    padding: .8rem;
}
.nav-sidebar > .nav-icon {
    font-size: 1.1rem;
}
input{
  text-align: right;
}
  </style>
    @stack('before-styles')

  @stack('after-styles')
</head>
<body class="hold-transition sidebar-mini">
  <div>
<div class="wrapper" style="background-color:#F4F6F9">

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
    <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            {{ Auth::user()->name }}
                <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="https://dsr.erprnd.com/profile" class="dropdown-item">My Profile</a>
                <a href="https://dsr.erprnd.com/profile/password/change" class="dropdown-item">Change Password</a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
            </div>
        </li>
        <!-- logout-->
        <li class="nav-item d-none d-sm-inline-block">
        
        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                                      class="nav-link"><i class="fa fa-fw fa-power-off"></i>Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <!-- {{ asset('dist/img/logo/DCR.png') }} -->
    <a href="http://127.0.0.1:8000/home" class="brand-link text-center">
      <img src="{{ asset('dist/img/logo/DCR.png') }}" class="img-responsive img-fluid center-block" alt="DCR"
             class="brand-image img-responsive elevation-3"
             style="opacity: .8" width = "170" height = "100">
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="http://127.0.0.1:8000/home" class="nav-link {{ $main_menu_name == 'dashboard' ? 'active' : ''}}">
            <i class="nav-icon fas fa-tachometer-alt pl-2 ml-1 mr-2"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $main_menu_name == '' ? 'active' : ''}}">
            <i class="nav-icon fas fa-chart-pie pl-2 ml-1 mr-2"></i>
              <p>
                Report
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $main_menu_name == '' ? 'active' : ''}}">
            <i class="nav-icon fas fa-video pl-2 ml-1 mr-2"></i>
              <p>
                Introduction
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $main_menu_name == '' ? 'active' : ''}}">
            <i class="nav-icon fab fa-youtube pl-2 ml-1 mr-2"></i>
              <p>
                Tutorial
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ $main_menu_name == '' ? 'active' : ''}}">
            <i class="nav-icon fas fa-file-pdf pl-2 ml-1 mr-2"></i>
              <p>
                PDF Manual
              </p>
            </a>
          </li>





          
          <li class="nav-header p-1 pt-2">
               Preferences
          </li>
          
          <li class="nav-item {{ $main_menu_name == '' ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{ $main_menu_name == '' ? 'active' : ''}}">
              <i class="nav-icon fas fa-users-cog   mr-1"></i>
              <p>Access Management
            <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users pl-1 ml-1 mr-1"></i>
                  <p>User Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-lock pl-1 ml-1 mr-1"></i>
                  <p>Role Manager</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-lock pl-1 ml-1 mr-1"></i>
                  <p>Permission Manager</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header p-1 pt-2">
               Log Manager
          </li>

          <li class="nav-item {{ $main_menu_name == '' ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{ $main_menu_name == '' ? 'active' : ''}}">
              <i class="nav-icon fas fa-user-secret mr-1"></i>
              <p>System Logs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-list-alt pl-1 ml-1 mr-1"></i>
                  <p>Log Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-circle pl-1 ml-1 mr-1"></i>
                  <p>All Logs</p>
                </a>
              </li>
              
            </ul>
          </li>







          <li class="nav-header p-1 pt-2">
               Master Setup
          </li>

          <li class="nav-item {{ $sub_menu_name == 'add_doctor' ? ' menu-open' : '' }}">
            <a href="#" class="nav-link {{ $main_menu_name == 'create' ? 'active' : ''}}">
              <i class="nav-icon fas fa-users-cog mr-1"></i>
              <p>Create New
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-users pl-1 ml-1 mr-1"></i>
                  <p>Sample</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-lock pl-1 ml-1 mr-1"></i>
                  <p>Ppm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-gift pl-1 ml-1 mr-1"></i>
                  <p>Gift</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('add_doctor')}}" class="nav-link {{ $sub_menu_name == 'add_doctor' ? 'active' : ''}}">
                  <i class="nav-icon fas fa-user-md pl-1 ml-1 mr-1"></i>
                  <p>Doctor</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-header p-1 pt-2">
               Transaction
          </li>
          
          <li class="nav-item {{ $main_menu_name == 'appraisal' ? 'menu-open' : ''}}">
            <a href="{{ url('territory') }}" class="nav-link {{ $main_menu_name == 'doctor' ? 'active' : ''}}">
              <i class="nav-icon fas fa-user-md mr-1"></i>
              <p>Doctor</p>
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
    </div>
    <!-- /.content-header -->
    @yield('content')
    
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
      Version 1.8
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a>DSR</a>.</strong> All Rights Reserved.
  </footer>
</div>
<!-- ./wrapper -->
</div>
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- Ajax -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
       

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="{{asset('../../plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> -->
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="{{asset('../../dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    <script>
      $(function () {
    
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": false,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });
    </script>
    @stack('after-scripts')
</body>
</html>
