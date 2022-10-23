<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | GAP</title>
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('admin-template/assets/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin-template/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin-template/assets/dist/css/adminlte.min.css')}}">

    <link rel="stylesheet" href="{{ asset('admin-template/assets/plugins/summernote/summernote-bs4.min.css')}}">

    <link
      rel="stylesheet"
      href="{{ asset('admin-template/assets/plugins/daterangepicker/daterangepicker.css')}}"
    />

      <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('admin-template/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin-template/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin-template/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  </head>
  <body
    class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"
  >
    <div class="wrapper">
      <!-- Preloader -->
      <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__wobble"
          src="{{ asset('admin-template/assets/dist/img/AdminLTELogo.png')}}"
          alt="AdminLTELogo"
          height="60"
          width="60"
        />
      </div>

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

          
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <!-- Navbar Search -->

          

          <!-- Messages Dropdown Menu -->
          <li class="nav-item">
            <form action="/logout" method="POST">
              @csrf
              <button type="submit" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>
                Logout</button>
            </form>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img
            src="{{ asset('admin-template/assets/dist/img/AdminLTELogo.png')}}"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">GAP | Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="{{ asset('admin-template/assets/dist/img/user2-160x160.jpg')}}"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">{{ auth()->user()->username;}}</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="/dashboard" class="nav-link {{ ($title === "dashboard")? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboard/report" class="nav-link {{ ($title === "report")? 'active' : '' }}">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Report</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboard/agents" class="nav-link {{ ($title === "agents")? 'active' : '' }}">
                  <i class="nav-icon fas fa-user-friends"></i>
                  <p>Agent</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboard/listing" class="nav-link {{ ($title === "listing")? 'active' : '' }}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>Listing</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboard/article" class="nav-link {{ ($title === "article")? 'active' : '' }}">
                  <i class="nav-icon fas fa-newspaper"></i>
                  <p>Article</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboard/profile" class="nav-link {{ ($title === "profile")? 'active' : '' }}">
                  <i class="nav-icon fas fa-building"></i>
                  <p>Profile</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboard/user" class="nav-link {{ ($title === "user")? 'active' : '' }}">
                  <i class="nav-icon fa fa-user-secret"></i>
                  <p>User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboard/categoryArticle" class="nav-link {{ ($title === "categoryArticle")? 'active' : '' }}">
                  <i class="nav-icon fa fa-list-ol"></i>
                  <p>Kategori Article</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/dashboard/categoryListing" class="nav-link {{ ($title === "categoryListing")? 'active' : '' }}">
                  <i class="nav-icon fa fa-list"></i>
                  <p>Kategori Listing</p>
                </a>
              </li>

            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      @yield('container')
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <strong
          >Copyright &copy; 2014-2021
          <a href="https://adminlte.io">AdminLTE.io</a>.</strong
        >
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 3.2.0
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('admin-template/assets/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admin-template/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('admin-template/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin-template/assets/dist/js/adminlte.js')}}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('admin-template/assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{ asset('admin-template/assets/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('admin-template/assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
    <script src="{{ asset('admin-template/assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('admin-template/assets/plugins/chart.js/Chart.min.js')}}"></script>

<!-- date-range-picker -->
<script src="{{ asset('admin-template/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
     <!-- jQuery -->
<script src="{{ asset('admin-template/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('admin-template/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- DataTables  & Plugins -->
<script src="{{ asset('admin-template/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin-template/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

<script src="{{ asset('admin-template/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "pageLength": 10
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

  });

  $('#content').summernote();
  $('#description').summernote();

  $.fn.digits = function(){ 
    return this.each(function(){ 
        $(this).text( $(this).text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,") ); 
    })
}

var el = document.querySelector('input.number');
el.addEventListener('keyup', function (event) {
  if (event.which >= 37 && event.which <= 40) return;

  this.value = this.value.replace(/\D/g, '')
                         .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});
  
</script>

    <!-- AdminLTE for demo purposes -->

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('admin-template/assets/dist/js/pages/dashboard2.js')}}"></script>
  </body>
</html>
