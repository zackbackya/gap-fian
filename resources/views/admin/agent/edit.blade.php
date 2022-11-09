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
            <h1>Edit Agent</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Agent</li>
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
             <div class="card">

              <form class="form-horizontal" method="post" action="/dashboard/{{ $title }}/{{ $agent->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                      <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $agent->nik) }}" placeholder="NIK">
                      </div>
                    </div>
                  <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $agent->name) }}" placeholder="Nama">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                          <div class="form-group">
                              <select class="custom-select" id="sex" name="sex">
                                @if(old('sex') == $agent->sex)
                                <option value="{{ $agent->sex }}" selected>{{ $agent->sex }}</option>
                                @else
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                @endif                                 
                              </select>
                            </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $agent->email) }}" placeholder="Email">
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
                            <input class="form-control" id="date" name="birthdate" placeholder="Tanggal Lahir" type="text"  value="{{ old('birthdate', $agent->birthdate) }}"/>
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
                          <textarea class="form-control" rows="3"  id="address" name="address" value="" placeholder="Alamat">{{ old('address', $agent->address) }}</textarea>
                
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="whatsapp" class="col-sm-2 col-form-label">NO Whatsapp</label>
                      <div class="col-sm-10">
                        <input type="number" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $agent->whatsapp) }}" placeholder="NO Handphone Whatsapp">
                      </div>
                    </div>
                 
                  <div class="form-group row">
                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $agent->instagram) }}" placeholder="www.instagram.com/username">
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $agent->facebook) }}" placeholder="www.facebook.com/username">
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <label for="photo_path" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                          <input type="hidden" name="old_photo_path" id="old_photo_path" value="{{ $agent->photo_path }}"> 
                          <input type="file" class="custom-file-input" id="photo_path" value="{{ old('photo_path')}}" name="photo_path" onchange="readURL(this);">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          

                          @if($agent->photo_path)
                          <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"
                          src="{{ asset('storage/' . $agent->photo_path )}}"
                          alt="{{ $agent->title }}"/>
                          @else
                          <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"/>
                          @endif

                        
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

              
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- /.content -->
  </div>


    <!-- /.modal -->

  <div class="modal fade" id="modal-xl-edit">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Article</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
                
                <!-- /.card-header -->
                <!-- form start -->
                
              
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  @include('admin.layout.footer')
</div>
<!-- ./wrapper -->
</body>
</html>

@include('admin.layout.script')