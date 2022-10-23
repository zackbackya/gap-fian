@extends('admin.main')
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

              <form class="form-horizontal" method="post" action="/dashboard/{{ $title }}/{{ $categoryArticle->id }}">
                @method('put')
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                      <label for="category_name" class="col-sm-2 col-form-label">Nama Kategori</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $categoryArticle->category_name }}" placeholder="Judul">
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

  <script>

  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');


  title.addEventListener('change', function() {
    fetch('/dashboard/article/checkSlug?article_judul=' + title.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

 </script>

  @endsection