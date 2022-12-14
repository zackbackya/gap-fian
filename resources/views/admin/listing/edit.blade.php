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
            <h1>Edit Listing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Listing</li>
            </ol>
          </div>
        </div>

        <form class="form-horizontal" method="post" action="/dashboard/{{ $title }}/{{ $listing->slug }}" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="card-body">
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="title" name="title" value="{{ $listing->title }}" placeholder="Judul" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ $listing->slug }}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="3"  id="address" name="address"  placeholder="Alamat" required>{{ $listing->address }}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="categoryListing_id" class="col-sm-2 col-form-label">Kategori Listing</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="categoryListing_id" name="categoryListing_id">
                          @foreach ($category_listings as $category)
                          @if(old('categoryListing_id', $listing->categoryListing_id) == $category->id)
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
                  <input type="number" class="form-control" id="bedroom" name="bedroom" value="{{ $listing->bedroom }}" placeholder="Jumlah Kamar Tidur" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="bathroom" class="col-sm-2 col-form-label">Jumlah Kamar Mandi</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="bathroom" name="bathroom" value="{{ $listing->bathroom }}" placeholder="Jumlah Kamar Mandi" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="type" class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="type" name="type" value="{{ $listing->type }}" placeholder="Type Contoh 36/72" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="building_width" class="col-sm-2 col-form-label">Luas Bangunan M<sup>2</sup></label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="building_width" name="building_width" value="{{ $listing->building_width }}" placeholder="Luas Bangunan Dalam Meter Persegi Tulis Angkanya saja contoh 45" required>
              
                </div>
              
              </div>
              <div class="form-group row">
                <label for="area_width" class="col-sm-2 col-form-label">Luas Tanah M<sup>2</sup></label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="area_width" name="area_width" value="{{ $listing->area_width }}" placeholder="Luas Tanah Dalam Meter Persegi Tulis Angkanya saja contoh 900" required>
                </div>
                
              </div>
              <div class="form-group row">
                <label for="garage" class="col-sm-2 col-form-label">Garasi</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="garage" name="garage" value="{{ $listing->garage }}" placeholder="Garasi" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Harga (Rp. )</label>
                
                 
                  
                <div class="col-sm-4">
                  <input class="number form-control" id="price" name="price" value="{{ number_format($listing->price) }}" placeholder="Tulis Harga Angkanya saja Contoh : 1000000 " required>
                </div>
                
              </div>
              <div class="form-group row">
                <label for="description" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                  <div class="card-body">
                    <textarea id="description" name="description" required>
                      {{ $listing->description }}
                                                </textarea>
                  </div>
          
                </div>
              </div>
              
              <div class="form-group row">
                <label for="photo_path" class="col-sm-2 col-form-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="hidden" name="old_photo_path" id="old_photo_path" value="{{ $listing->photo_path }}"> 
                    <input type="file" class="custom-file-input" id="photo_path" value="{{ old('photo_path')}}" name="photo_path" onchange="readURL(this);">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    

                    @if($listing->photo_path)
                    <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"
                    src="{{ asset('storage/' . $listing->photo_path )}}"
                    alt="{{ $listing->title }}"/>
                    @else
                    <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"/>
                    @endif

                  
                  </div>
              </div>


              <div class="form-group row">
                <label for="agent_id" class="col-sm-2 col-form-label">Agent</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="agent_id" name="agent_id">
                          @foreach ($agents as $agent)
                          @if(old('agent_id', $listing->agent_id) == $agent->id)
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
                  <input type="text" class="form-control" id="owner_name" name="owner_name" value="{{ $listing->owner_name }}" placeholder="Pemilik" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="owner_phone" class="col-sm-2 col-form-label"> No Telpon Pemilik</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="owner_phone" name="owner_phone" placeholder="No Telpon Pemilik" value="{{ $listing->owner_phone }}" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status Listing</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="status" name="status"  required>

                          @if(old('status', $listing->status) == "Terjual")
                          <option value="Terjual" selected>Terjual</option>
                          <option value="Belum Terjual">Belum Terjual</option> 
                          @else
                          <option value="Terjual">Terjual</option>
                          <option value="Belum Terjual" selected>Belum Terjual</option> 
                              @endif
                          
                                 
                        </select>
                      </div>
                </div>
              </div>

              <div id="buyerAgentID">
              <div class="form-group row">
                <label for="buyer_agent_id" class="col-sm-2 col-form-label">Agent Pemilik Buyer</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select class="custom-select" id="buyer_agent_id" name="buyer_agent_id">
                          @foreach ($agents as $agent)
                          @if(old('agent_id', $listing->agent_id) == $agent->id)
                          <option value="{{ $agent->id }}" selected>{{ $agent->name }}</option>
                          @else

                          <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                              @endif
                          @endforeach
                                                            
                        </select>
                      </div>
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


  
  @include('admin.layout.footer')
</div>
<!-- ./wrapper -->
</body>
</html>

@include('admin.layout.script')
