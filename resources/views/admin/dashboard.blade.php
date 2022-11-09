@include('admin.layout.header')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

 @include('admin.layout.navbar')

 @include('admin.layout.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard v2</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>
              </div>
              <!-- /.card-header -->
  
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <h5 class="description-header">Rp 1.000.000</h5>
                      <span class="description-text">TOTAL SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <h5 class="description-header">Rp 1.000.000</h5>
                      <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <h5 class="description-header">8 UNIT</h5>
                      <span class="description-text">LISTING BARU</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <h5 class="description-header">5 ORANG</h5>
                      <span class="description-text">AGENT BARU</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
  
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- /.card -->
            <div class="row">
              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Agent Sales Tertinggi</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user1-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#"
                          >Alexander Pierce</a
                        >
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user8-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user7-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Jane</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user6-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">John</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user2-160x160.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Alexander</a>
                        <span class="users-list-date">13 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user5-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Sarah</a>
                        <span class="users-list-date">14 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user4-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Nora</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user3-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Nadia</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
  
              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Agent Sales Tertinggi</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user1-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#"
                          >Alexander Pierce</a
                        >
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user8-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user7-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Jane</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user6-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">John</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user2-160x160.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Alexander</a>
                        <span class="users-list-date">13 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user5-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Sarah</a>
                        <span class="users-list-date">14 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user4-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Nora</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                      <li>
                        <img
                          src="{{ asset('admin-template/assets/dist/img/user3-128x128.jpg')}}"
                          alt="User Image"
                        />
                        <a class="users-list-name" href="#">Nadia</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
  
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Listing terbaru</h3>
  
                <div class="card-tools">
                  <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="collapse"
                  >
                    <i class="fas fa-minus"></i>
                  </button>
                  <button
                    type="button"
                    class="btn btn-tool"
                    data-card-widget="remove"
                  >
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                      <tr>
                        <th>Order ID</th>
                        <th>Item</th>
                        <th>Status</th>
                        <th>Popularity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html">OR9842</a>
                        </td>
                        <td>Call of Duty IV</td>
                        <td>
                          <span class="badge badge-success">Shipped</span>
                        </td>
                        <td>
                          <div
                            class="sparkbar"
                            data-color="#00a65a"
                            data-height="20"
                          >
                            90,80,90,-70,61,-83,63
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html">OR1848</a>
                        </td>
                        <td>Samsung Smart TV</td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td>
                          <div
                            class="sparkbar"
                            data-color="#f39c12"
                            data-height="20"
                          >
                            90,80,-90,70,61,-83,68
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html">OR7429</a>
                        </td>
                        <td>iPhone 6 Plus</td>
                        <td>
                          <span class="badge badge-danger">Delivered</span>
                        </td>
                        <td>
                          <div
                            class="sparkbar"
                            data-color="#f56954"
                            data-height="20"
                          >
                            90,-80,90,70,-61,83,63
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html">OR7429</a>
                        </td>
                        <td>Samsung Smart TV</td>
                        <td>
                          <span class="badge badge-info">Processing</span>
                        </td>
                        <td>
                          <div
                            class="sparkbar"
                            data-color="#00c0ef"
                            data-height="20"
                          >
                            90,80,-90,70,-61,83,63
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html">OR1848</a>
                        </td>
                        <td>Samsung Smart TV</td>
                        <td>
                          <span class="badge badge-warning">Pending</span>
                        </td>
                        <td>
                          <div
                            class="sparkbar"
                            data-color="#f39c12"
                            data-height="20"
                          >
                            90,80,-90,70,61,-83,68
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html">OR7429</a>
                        </td>
                        <td>iPhone 6 Plus</td>
                        <td>
                          <span class="badge badge-danger">Delivered</span>
                        </td>
                        <td>
                          <div
                            class="sparkbar"
                            data-color="#f56954"
                            data-height="20"
                          >
                            90,-80,90,70,-61,83,63
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <a href="pages/examples/invoice.html">OR9842</a>
                        </td>
                        <td>Call of Duty IV</td>
                        <td>
                          <span class="badge badge-success">Shipped</span>
                        </td>
                        <td>
                          <div
                            class="sparkbar"
                            data-color="#00a65a"
                            data-height="20"
                          >
                            90,80,90,-70,61,-83,63
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a
                  href="javascript:void(0)"
                  class="btn btn-sm btn-info float-left"
                  >Place New Order</a
                >
                <a
                  href="javascript:void(0)"
                  class="btn btn-sm btn-secondary float-right"
                  >View All Orders</a
                >
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
  
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!--/. container-fluid -->
    </section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('admin.layout.footer')
</div>
<!-- ./wrapper -->

@include('admin.layout.script')
</body>
</html>
