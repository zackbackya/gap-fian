@extends('admin.main')
@section('container')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Lihat Article</h1>
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

      <!-- Default box -->
      <div class="card">
        
        <div class="card-header">
            
          <h3 class="card-title">{{ $article->title }}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>

        <div class="card-body">
        <div style="max-height: 300px; overflow:hidden">
          <img
            src="{{ asset('storage/' . $article->photo_path )}}"
            alt="{{ $article->title }}"
          />
        </div>
        </div>

        <div class="card-body">
          {{ $article->content }}
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          sumber : {{ $article->source }}
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/">
        <i class="fas fa-arrow-left">
        </i>
        Kembali
    </a>
    <a class="btn btn-info btn-sm" href="/dashboard/{{ $title }}/{{ $article->slug }}/edit">
            <i class="fas fa-pencil-alt">
            </i> Edit
          </a>
        <form method="post" action="/dashboard/{{ $title }}/{{ $article->slug }}" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger btn-sm" onClick="return confirm('Apakah Yakin Data Akan dihapus ?')">
            <i class="fas fa-trash">
            </i>
            Delete
        </button>

        </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection