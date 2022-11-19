@include('admin.layout.header')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

 @include('admin.layout.navbar')

 @include('admin.layout.sidebar');


@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lihat Testimoni</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Testimoni</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        
        <div class="card-header">
            
          <h3 class="card-title">{{ $testimony->name }}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <div class="card-body">
        <div style="max-height: 300px; overflow:hidden">
          <img
            src="{{ asset('storage/' . $testimony->photo_path )}}"
            alt="{{ $testimony->name }}"
          />
        </div>
        </div>

        <div class="card-body">
          {{ $testimony->testimony }}
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/">
        <i class="fas fa-arrow-left">
        </i>
        Kembali
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

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('admin.layout.footer')
</div>
<!-- ./wrapper -->
</body>
</html>

@include('admin.layout.script')