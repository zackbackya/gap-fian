@include('admin.layout.header')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

 @include('admin.layout.navbar')

 @include('admin.layout.sidebar');
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Company Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Company Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <!-- /.card -->

            <div class="card">
              
              @if(session()->has('success'))
              <div class="alert alert-primary" role="alert">
               {{ session('success') }}
              </div>
              @endif
                            <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  

                    <tbody>
                      @foreach ($profiles as $profile)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $profile->company_name }}</td>
                        <td>{{ $profile->address }}</td>
                        <td class="project-actions text-center">
                          
                        <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/{{ $profile->id }}/edit">
                                <i class="fas fa-pencil-alt">
                                </i> Edit
                              </a>
                        </td>
                      </tr>
                      @endforeach
                   
  
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->

      @if($profiles->count()==null)
      <div class="card-footer">
        <a href="/dashboard/{{ $title }}/create" class="btn btn-primary"> Add Data
       
        </a>
      </div>
      @endif
    <!-- /.content -->
  </div>


  @include('admin.layout.footer')
</div>
<!-- ./wrapper -->
</body>
</html>

@include('admin.layout.script')