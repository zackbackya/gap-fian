@extends('admin.main')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Listing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Listing</li>
            </ol>
          </div>
        </div>

        <form class="form-horizontal" method="post" action="/dashboard/{{ $title }}/">
          @csrf
          <div class="card-body">
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Judul">
                </div>
              </div>
              <div class="form-group row">
                <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ old('slug') }}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"  id="address" name="address" value="{{ old('address') }}" placeholder="Alamat"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="categoryListing_id" class="col-sm-2 col-form-label">Kategori Listing</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="categoryListing_id" name="categoryListing_id">
                          @foreach ($category_listings as $category)
                          @if(old('categoryListing_id') == $category->id)
                          <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                          @else

                          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                              @endif
                          @endforeach
                                                            
                        </select>
                      </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="bedroom" class="col-sm-2 col-form-label">Jumlah Kamar Tidur</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="bedroom" name="bedroom" value="{{ old('bedroom') }}" placeholder="Jumlah Kamar Tidur">
                </div>
              </div>

              <div class="form-group row">
                <label for="bathroom" class="col-sm-2 col-form-label">Jumlah Kamar Mandi</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="bathroom" name="bathroom" value="{{ old('bathroom') }}" placeholder="Jumlah Kamar Mandi">
                </div>
              </div>
              <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}" placeholder="Type Contoh 36/72">
                </div>
              </div>
              <div class="form-group row">
                <label for="building_width" class="col-sm-2 col-form-label">Luas Bangunan M<sup>2</sup></label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="building_width" name="building_width" value="{{ old('building_width') }}" placeholder="Luas Bangunan Dalam Meter Persegi Tulis Angkanya saja contoh 45">
              
                </div>
              
              </div>
              <div class="form-group row">
                <label for="area_width" class="col-sm-2 col-form-label">Luas Tanah M<sup>2</sup></label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="area_width" name="area_width" value="{{ old('area_width') }}" placeholder="Luas Tanah Dalam Meter Persegi Tulis Angkanya saja contoh 900">
                </div>
                
              </div>
              <div class="form-group row">
                <label for="garage" class="col-sm-2 col-form-label">Garasi</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="garage" name="garage" value="{{ old('garage') }}" placeholder="Garasi">
                </div>
              </div>
              <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Harga (Rp. )</label>
                
                 
                  
                <div class="col-sm-4">
                  <input class="number form-control" id="price" name="price" value="{{ old('price') }}" placeholder="Tulis Harga Angkanya saja Contoh : 1000000 ">
                </div>
                
              </div>
              <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <div class="card-body">
                    <textarea id="description" name="description">
                     {{ old('description') }}
                                                </textarea>
                  </div>
          
                </div>
              </div>
              
              <div class="form-group row">
                <label for="photo_path" class="col-sm-2 col-form-label">Foto</label>
                
                  <div class="col-sm-10">
                    <input type="file" class="custom-file-input" id="photo_path" value="{{ old('photo_path') }}" name="photo_path" >
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
              </div>

              <div class="form-group row">
                <label for="agent_id" class="col-sm-2 col-form-label">Agent</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="agent_id" name="agent_id">
                          @foreach ($agents as $agent)
                          @if(old('agent_id') == $agent->id)
                          <option value="{{ $agent->id }}" selected>{{ $agent->name }}</option>
                          @else

                          <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                              @endif
                          @endforeach
                                                            
                        </select>
                      </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="owner_name" class="col-sm-2 col-form-label">Pemilik</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="owner_name" name="owner_name" value="{{ old('owner_name') }}" placeholder="Pemilik">
                </div>
              </div>
              <div class="form-group row">
                <label for="owner_phone" class="col-sm-2 col-form-label"> No Telpon Pemilik</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="owner_phone" name="owner_phone" placeholder="No Telpon Pemilik" value="{{ old('owner_phone') }}">
                </div>
              </div>

              <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status Listing</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="status" name="status"  required>
                            <option value="Terjual">Terjual</option>
                            <option value="Belum Terjual" selected>Belum Terjual</option>                                 
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


  

  <script>

  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');


  title.addEventListener('change', function() {
    fetch('/dashboard/article/checkSlug?article_judul=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  $('input.number').keyup(function(event) {

// skip for arrow keys
if(event.which >= 37 && event.which <= 40) return;

// format number
$(this).val(function(index, value) {
  return value
  .replace(/\D/g, "")
  .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  ;
});
});



  

  </script>

  @endsection