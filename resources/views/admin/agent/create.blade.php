@include('admin.layout.header')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

 @include('admin.layout.navbar')

 @include('admin.layout.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Agent</h1>
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
                  <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik') }}" placeholder="NIK" @error('nik') is-invalid @enderror required>
                  @error('nik')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nama" @error('name') is-invalid @enderror required>
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="sex" name="sex" required>

                          
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                          
                          
                        </select>
                      </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email" @error('email') is-invalid @enderror required>
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
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
                      <input class="form-control" name="birthdate" name="birthdate" placeholder="Tanggal Lahir" type="text" @error('birthdate') is-invalid @enderror required/>
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
                      @error('birthdate')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                    </div>
              </div>

              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"  id="address" name="address" value="{{ old('address') }}" placeholder="Alamat" @error('address') is-invalid @enderror required></textarea>
                    @error('address')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="whatsapp" class="col-sm-2 col-form-label">NO Whatsapp</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}" placeholder="NO Handphone Whatsapp diawali dengan kode negara contoh : 628122221222" @error('whatsapp') is-invalid @enderror required>
                  @error('whatsapp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>
           
            <div class="form-group row">
              <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram') }}" placeholder="www.instagram.com/username" @error('instagram') is-invalid @enderror required>
                @error('instagram')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
                <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook') }}" placeholder="www.facebook.com/username" @error('facebook') is-invalid @enderror required>
                  @error('facebook')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="photo_path" class="col-sm-2 col-form-label">Foto</label>
                
                  <div class="col-sm-10">
                    <input type="file" class="custom-file-input" id="photo_path" value="{{ old('photo_path') }}" name="photo_path" onchange="readURL(this);" @error('photo_path') is-invalid @enderror required>
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    @error('photo_path')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                    <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;">  
                  </div>
                
              </div>

       


              <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="status" name="status"  required>
                            <option value="Aktif" selected>Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>                                 
                        </select>
                      </div>
                </div>
              </div>
            
          </div>
          <!-- /.card-body -->
          <div class="modal-footer justify-content-between">
            <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/">
            </i> Cancel
          </a>
          
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
          
        </form>

      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>

  <!-- /.modal -->
  <!-- /.content-wrapper -->

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




