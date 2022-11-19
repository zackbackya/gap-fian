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
          @if ($profile->company_name != null)
          <h1>Company Profile {{ $profile->company_name }}</h1>
          @else
          <h1>Company Profile</h1>
          @endif
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Company Profile</li>
          </ol>
        </div>
      </div>

      <form class="form-horizontal" method="post" action="/dashboard/{{ $title }}/" enctype="multipart/form-data">
        @csrf
              <div class="card-body">
                  <div class="form-group row">
                    <label for="company_name" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="company_name" name="company_name" value="{{ old('company_name', $profile->company_name) }}" placeholder="Nama" readonly disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="latitude" class="col-sm-2 col-form-label">Latitude</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $profile->latitude) }}" placeholder="latitude" readonly disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="longitude" class="col-sm-2 col-form-label">Longitude</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $profile->longitude) }}" placeholder="longitude" readonly disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $profile->email) }}" placeholder="Email" readonly disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="3"  id="address" name="address" value="" placeholder="Alamat" readonly disabled>{{ old('address', $profile->address) }}</textarea>
              
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="whatsapp" class="col-sm-2 col-form-label">NO Whatsapp</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $profile->whatsapp) }}" placeholder="NO Handphone Whatsapp diawali dengan kode negara contoh 628214321099" readonly disabled>
                    </div>
                  </div>
               
                <div class="form-group row">
                  <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $profile->instagram) }}" placeholder="www.instagram.com/username" readonly disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $profile->facebook) }}" placeholder="www.facebook.com/username" readonly disabled>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="photo_path" class="col-sm-2 col-form-label">Logo</label>
                      <div class="col-sm-10">
                        <input type="hidden" name="old_photo_path" id="old_photo_path" value="{{ $profile->logo_path }}"> 
                        <input type="file" class="custom-file-input" id="logo_path" value="{{ old('logo_path')}}" name="logo_path" onchange="readURL(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        

                        @if($profile->logo_path)
                        <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"
                        src="{{ asset('storage/' . $profile->logo_path )}}"
                        alt="{{ $profile->title }}"/>
                        @else
                        <img class="img-preview-logo img-fluid mb-3 col-sm-5" style="padding: 1%;"/>
                        @endif

                      
                      </div>
                  </div>


                  <div class="form-group row">
                    <label for="photo_path" class="col-sm-2 col-form-label">Foto</label>
                      <div class="col-sm-10">
                        <input type="hidden" name="old_photo_path" id="old_photo_path" value="{{ $profile->photo_path }}"> 
                        <input type="file" class="custom-file-input" id="photo_path" value="{{ old('photo_path')}}" name="photo_path" onchange="readURL(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        

                        @if($profile->photo_path)
                        <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"
                        src="{{ asset('storage/' . $profile->photo_path )}}"
                        alt="{{ $profile->title }}"/>
                        @else
                        <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"/>
                        @endif

                      
                      </div>
                  </div>

                
              </div>
        <!-- /.card-body -->
        <a class="btn btn-info btn-sm" href="/dashboard/">
          <i class="fas fa-arrow-left">
          </i>
          Kembali
      </a>
      <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/{{ $profile->id }}/edit">
              <i class="fas fa-pencil-alt">
              </i> Edit
            </a>
          
  
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
