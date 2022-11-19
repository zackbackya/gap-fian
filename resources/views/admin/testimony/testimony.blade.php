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
            <h1>Testimony</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Testimony</li>
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
             <!-- /.card-header -->
             @if(session()->has('success'))
             <div class="alert alert-primary" role="alert">
              {{ session('success') }}
             </div>
             @endif

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Testimoni</th>
                    <th>Status</th>
                    <th>Tanggal Ditambahkan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($testimonies as $testimony)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $testimony->name }}</td>
                      <td>{{ $testimony->testimony }}</td>
                       @if($testimony->status == 'T' )
                      <td>
                        Aktif
                      </td>
                      @else
                      <td>
                        Tidak Aktif
                      </td>
                      @endif

                      <td>{{ $testimony->created_at }}</td>
                      <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/{{ $testimony->id }}">
                          <i class="fas fa-eye">
                          </i>
                          Show
                      </a>
                      <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/{{ $testimony->id }}/edit">
                              <i class="fas fa-pencil-alt">
                              </i> Edit
                            </a>
                          <form method="post" action="/dashboard/{{ $title }}/{{ $testimony->id }}" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm" onClick="return confirm('Apakah Yakin Data Akan dihapus ?')">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </button>

                          </form>
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

      <div class="card-footer">
        <a href="/dashboard/{{ $title }}/create" class="btn btn-primary"> Add Data
       
        </a>
      </div>
    </section>
    <!-- /.content -->
  </div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

@include('admin.layout.footer')
</div>
<!-- ./wrapper -->
</body>
</html>

@include('admin.layout.script')