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
            <h1 class="m-0">Dashboard Admin Garda Adhi Pratama</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
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
                <h5 class="card-title">Monthly Recap Report {{ date('F Y') }}</h5>
              </div>
              <!-- /.card-header -->
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                      <div class="inner">
                        <h3>Rp {{ number_format($sales) }}</h3>
        
                        <p>Total Sales</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-cash"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                      <div class="inner">
                        <h3>Rp {{ number_format($sales*0.15) }}<!--<sup style="font-size: 20px">%</sup>--></h3>
        
                        <p>Total Profit</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  
                  <!-- ./col -->
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                      <div class="inner">
                        <h3>{{ $listing_baru }} Unit</h3>
        
                        <p>Listing Baru</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-home"></i>
                      </div>
                      <a href="/dashboard/listing" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                      <div class="inner">
                        <h3>{{ $agent_baru }} Orang</h3>
        
                        <p>Agent Baru</p>
                      </div>
                      <div class="icon">
                        <i class="ion ion-person-add"></i>
                      </div>
                      <a href="/dashboard/agents" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                </div>
              </div>
  
              <!-- ./card-body -->
              
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
                      @foreach($agent_tertinggi as $sales)
                      <li>
                        <img class="img-fluid" style="height: 160px; width: 160px"
                          src="{{ asset('storage/' . $sales->photo_path )}}"
                          alt="{{ $sales->name }}"
                        />
                        <a class="users-list-name" href="#"
                          >{{ $sales->name }}</a
                        >
                        <span class="users-list-date">Rp. {{ number_format($sales->Sales) }}</span>
                      </li>
                      @endforeach
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="/dashboard/agents">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
  
              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Agent Belum Clossing</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      @foreach($agent_clossing as $sales)
                      <li>
                        <img class="img-fluid" style="height: 160px; width: 160px"
                          src="{{ asset('storage/' . $sales->photo_path )}}"
                          alt="{{ $sales->name }}"
                        />
                        <a class="users-list-name" href="#"
                          >{{ $sales->name }}</a
                        >
                        <span class="users-list-date">Potensi Rp. {{ number_format($sales->potensi) }}</span>
                      </li>
                      @endforeach
                    
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="/dashboard/agents">View All Users</a>
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
                        <th>No. </th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Alamat</th>
                        <th>Agent</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($listings as $listing)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $listing->title }}</td>
                        <td> Rp. {{ number_format($listing->price) }}</td>
                        <td>{{ $listing->address }}</td>
                        <td>{{ $listing->name }}</td>
                      </tr>
                      @endforeach
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              
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
