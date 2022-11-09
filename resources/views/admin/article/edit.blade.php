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
            <h1>Edit Article</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Article</li>
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

              <form class="form-horizontal" method="post" action="/dashboard/{{ $title }}/{{ $article->slug }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                      <label for="title" class="col-sm-2 col-form-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" placeholder="Judul">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ old('slug', $article->slug) }}" readonly>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="photo_path" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                          <input type="hidden" name="old_photo_path" id="old_photo_path" value="{{ $article->photo_path }}"> 
                          <input type="file" class="custom-file-input" id="photo_path" value="{{ old('photo_path')}}" name="photo_path" onchange="readURL(this);">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          

                          @if($article->photo_path)
                          <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"
                          src="{{ asset('storage/' . $article->photo_path )}}"
                          alt="{{ $article->title }}"/>
                          @else
                          <img class="img-preview img-fluid mb-3 col-sm-5" style="padding: 1%;"/>
                          @endif

                        
                        </div>
                    </div>
      
                    <div class="form-group row">
                      <label for="content" class="col-sm-2 col-form-label">Content</label>
                      <div class="col-sm-10">
                        <div class="card-body">
                          <textarea id="content" name="content">
                           {{ old('content', $article->content) }}
                           </textarea>
                        </div>
                
                      </div>
                    </div>
                    
                    
                  
                    <div class="form-group row">
                      <label for="source" class="col-sm-2 col-form-label">Sumber</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="source" name="source" value="{{ old('source', $article->source) }}" placeholder="Sumber">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="category_id" class="col-sm-2 col-form-label">Kategori Article</label>
                      <div class="col-sm-10">
                          <div class="form-group">
                              <select class="custom-select" id="category_id" name="category_id">
                                @foreach ($categories as $category)
                                @if(old('category_id', $article->category_id) == $category->id)
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
                      <label for="status" class="col-sm-2 col-form-label">Status</label>
                      <div class="col-sm-10">
                          <div class="form-group">
                              <select class="custom-select" id="status" name="status"  required>
                                  <option value="T" selected>Aktif</option>
                                  <option value="F">Tidak Aktif</option>                                 
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


    <!-- /.modal --> @include('admin.layout.footer')
</div>
<!-- ./wrapper -->
</body>
</html>

@include('admin.layout.script')