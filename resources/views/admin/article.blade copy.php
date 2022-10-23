@extends('admin.main')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Article</h1>
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
            
            <!-- /.card -->

            <div class="card">
                            <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Sumber</th>
                    <th>Kategori</th>
                    <th>Tanggal Ditambahkan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($articles as $article)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $article->title }}</td>
                      <td>{{ $article->source }}</td>
                      <td>{{ $article->category_id }}</td>
                      <td>{{ $article->created_at }}</td>
                      <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="/dashboard/article/{{ $article->slug }}">
                          <i class="fas fa-eye">
                          </i>
                          Show
                      </a>
                      <button type="submit" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#modal-xl-edit">
                              <i class="fas fa-pencil-alt">
                              </i> Edit
                            </button>
                          <form method="post" action="/dashboard/article/{{ $article->slug }}" class="d-inline">
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
        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">Add Data</button>
      </div>
    </section>
    <!-- /.content -->
  </div>


  <div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Article</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
                
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="/dashboard/article/">
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
                        <label for="content" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                          <div class="card-body">
                            <textarea id="content" name="content">
                             {{ old('content') }}
                                                        </textarea>
                          </div>
                  
                        </div>
                      </div>
                      
                      
                    
                      <div class="form-group row">
                        <label for="source" class="col-sm-2 col-form-label">Sumber</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="source" name="source" value="{{ old('source') }}" placeholder="Sumber">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="category_id" class="col-sm-2 col-form-label">Kategori Article</label>
                        <div class="col-sm-10">
                            <div class="form-group">
                                <select class="custom-select" id="category_id" name="category_id">
                                  @foreach ($categories as $category)
                                  @if(old('category_id') == $category->id)
                                  <option value="{{ $category->id }}" selected>{{ $category->category_name }}</option>
                                  @else

                                  <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                      @endif
                                  @endforeach
                                                                    
                                </select>
                              </div>
                        </div>
                      </div>
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  
                </form>
              
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
                <form class="form-horizontal" method="post" action="/dashboard/article/{{ $article->slug }}">
                  @method('put')
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}" placeholder="Judul">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="slug" name="slug" placeholder="slug" value="{{ old('slug', $article->slug) }}" readonly>
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
                    
                  </div>
                  <!-- /.card-body -->
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                  
                </form>
              
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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

  const title_edit = document.querySelector('#title_edit');
  const slug_edit= document.querySelector('#slug_edit');


  title_edit.addEventListener('change', function() {
    fetch('/dashboard/article/checkSlug?article_judul=' + title_edit.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

  </script>

  @endsection