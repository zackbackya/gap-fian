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
            <h1>Edit User {{ $userLogin->id }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
              <li class="breadcrumb-item active">User</li>
            </ol>
          </div>
        </div>

        <form class="form-horizontal" method="post" action="/dashboard/user/{{ $userLogin->id }}">
        @method('put')
          @csrf
          <div class="card-body">
            <div class="card-body">

              <div class="form-group row">
                <label for="agent_id" class="col-sm-2 col-form-label">Nama</label>
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
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" name="username" value="{{ $userLogin->username }}" placeholder="Username" @error('username') is-invalid @enderror required >
                      @error('username')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" value="{{ $userLogin->password }}" placeholder="Password" @error('password') is-invalid @enderror required>
                      @error('password')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                      @enderror
                    </div>
                  </div>

                  
                  <div class="form-group row">
                    <label for="access" class="col-sm-2 col-form-label">Access</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select class="custom-select" id="access" name="access"  required>
                                        
                                
                                @if(old('access', $userLogin->access) == $userLogin->access)
                                <option value="{{ $userLogin->access }}" selected>{{ $userLogin->access }}</option>
                                @else

                                <option value="Admin">Admin</option>
                                <option value="Superadmin">Superadmin</option>  
                                    @endif
                                
                            </select>
                          </div>
                    </div>
                  </div>

                
              </div>
            
          </div>
          <!-- /.card-body -->
          <div class="modal-footer justify-content-between">
            <a class="btn btn-info btn-sm" href="/dashboard/user/">
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


 

  
  <!-- /.modal -->

  @include('admin.layout.footer')
</div>
<!-- ./wrapper -->
</body>
</html>

@include('admin.layout.script')