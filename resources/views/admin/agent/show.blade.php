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
          <h1>Data Agent {{ $agent->name }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Agent</li>
          </ol>
        </div>
      </div>

      <form class="form-horizontal" method="post" action="/dashboard/{{ $title }}/" enctype="multipart/form-data">
        @csrf
              <div class="card-body">
                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $agent->nik) }}" placeholder="NIK" readonly disabled>
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $agent->name) }}" placeholder="Nama" readonly disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" class="form-control" id="sex" name="sex" value="{{ old('sex', $agent->sex) }}" placeholder="Jenis Kelamin" readonly disabled>
                            
                          </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $agent->email) }}" placeholder="Email" readonly disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="birthdate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                      <div
                            class="input-group date"
                            id="birthdate"
                            data-target-input="nearest"
                          >
                          <input class="form-control" id="date" name="birthdate" placeholder="Tanggal Lahir" type="text"  value="{{ old('birthdate', $agent->birthdate) }}" readonly disabled/>
                            <div
                              class="input-group-append"
                              data-target="#birthdate"
                              data-toggle="datetimepicker"
                            >
                              <div class="input-group-text">
                                <i class="fa fa-calendar"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3"  id="address" name="address" value="" placeholder="Alamat" readonly disabled>{{ old('address', $agent->address) }}</textarea>
              
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="whatsapp" class="col-sm-2 col-form-label">NO Whatsapp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $agent->whatsapp) }}" placeholder="NO Handphone Whatsapp diawali dengan kode negara contoh 628214321099" readonly disabled>
                    </div>
                  </div>
               
                <div class="form-group row">
                  <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $agent->instagram) }}" placeholder="www.instagram.com/username" readonly disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $agent->facebook) }}" placeholder="www.facebook.com/username" readonly disabled>
                    </div>
                  </div>
    
                  <div class="form-group row">
                    <label for="photo_path" class="col-sm-2 col-form-label">Foto</label>
                    
                      <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"
                        src="{{ asset('storage/' . $agent->photo_path )}}"
                        alt="{{ $agent->title }}"
                      />
                    
                  </div>

                  <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                          <input type="text" class="form-control" id="status" name="status" value="{{ old('status', $agent->status) }}" placeholder="Jenis Kelamin" readonly disabled>
                        </select>
                          </div>
                    </div>
                  </div>
                
              </div>
        <!-- /.card-body -->
        <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/">
          <i class="fas fa-arrow-left">
          </i>
          Kembali
      </a>
      <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/{{ $agent->id }}/edit">
              <i class="fas fa-pencil-alt">
              </i> Edit
            </a>
          <form method="post" action="/dashboard/{{ $title }}/{{ $agent->id }}" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger btn-sm" onClick="return confirm('Apakah Yakin Data Akan dihapus ?')">
              <i class="fas fa-trash">
              </i>
              Delete
          </button>
  
          </form><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  
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

@include('admin.layout.script')
</body>
</html>
