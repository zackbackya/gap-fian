@extends('admin.main')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori Article</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Kategori Article</li>
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
             @if(session()->has('success'))
             <div class="alert alert-primary" role="alert">
              {{ session('success') }}
             </div>
             @endif

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kategori</th>
                    <th>Tanggal Ditambahkan</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                   
                    @foreach ($category_articles as $category)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $category->category_name }}</td>
                      <td>{{ $category->created_at }}</td>
                      <td class="project-actions text-center">
                        
                      <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/{{ $category->id  }}/edit">
                              <i class="fas fa-pencil-alt">
                              </i> Edit
                            </a>
                          <form method="post" action="/dashboard/{{ $title }}/{{ $category->id  }}" class="d-inline">
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
        <a href="/dashboard/{{ $title }}/create" class="btn btn-primary"> Add Data
       
        </a>
      </div>
    </section>
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

  



  </script>

  @endsection