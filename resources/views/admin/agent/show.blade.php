@extends('admin.main')
@section('container')
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
                        <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik', $agent->nik) }}" placeholder="NIK" readonly>
                      </div>
                    </div>
                  <div class="form-group row">
                      <label for="name" class="col-sm-2 col-form-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $agent->name) }}" placeholder="Nama" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                          <div class="form-group">
                            <input type="text" class="form-control" id="sex" name="sex" value="{{ old('sex', $agent->sex) }}" placeholder="Jenis Kelamin" readonly>
                              
                            </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="email" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $agent->email) }}" placeholder="Email" readonly>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="birthdate" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                      <div class="col-sm-10">
                        <div class="input-group date" id="birthdate" name="birthdate" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                      <div class="col-sm-10">
                          <textarea class="form-control" rows="3"  id="address" name="address" value="" placeholder="Alamat" readonly>{{ old('address', $agent->address) }}</textarea>
                
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="whatsapp" class="col-sm-2 col-form-label">NO Whatsapp</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $agent->whatsapp) }}" placeholder="NO Handphone Whatsapp diawali dengan kode negara contoh 628214321099" readonly>
                      </div>
                    </div>
                 
                  <div class="form-group row">
                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="instagram" name="instagram" value="{{ old('instagram', $agent->instagram) }}" placeholder="www.instagram.com/username" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label for="facebook" class="col-sm-2 col-form-label">Facebook</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ old('facebook', $agent->facebook) }}" placeholder="www.facebook.com/username" readonly>
                      </div>
                    </div>
      
                    <div class="form-group row">
                      <label for="photo_path" class="col-sm-2 col-form-label">Foto</label>
                      <div style="max-height: 300px; overflow:hidden">
                        <img
                          src="{{ asset('storage/' . $agent->photo_path )}}"
                          alt="{{ $agent->title }}"
                        />
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="status" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                          <div class="form-group">
                            <input type="text" class="form-control" id="status" name="status" value="{{ old('status', $agent->status) }}" placeholder="Jenis Kelamin" readonly>
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


  
  
  <!-- /.modal -->
  <script>

  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');


  title.addEventListener('change', function() {
    fetch('/dashboard/article/checkSlug?article_judul=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  $("#birthdate").datetimepicker({
          format: "L",
        });

        <script>

  </script>


  @endsection