 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
     
      <span class="brand-text font-weight-light">GAP | {{ auth()->user()->access}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!--
        
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="image">
          <img
            src=""
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->username  /*$agent = Agents::where('id','=',auth()->user()->agent_id->get()->first();*/  }}</a>
        </div>
      
      </div>
      -->

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul
          class="nav nav-pills nav-sidebar flex-column"
          data-widget="treeview"
          role="menu"
          data-accordion="false"
        >
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/dashboard" class="nav-link {{ ($title === "dashboard")? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
      
               @can('superadmin')
               <li class="nav-item">
                <a href="/dashboard/report" class="nav-link {{ ($title === "report")? 'active' : '' }}">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Report</p>
                </a>
              </li>
              @endcan
           
               

          <li class="nav-item">
            <a href="/dashboard/agents" class="nav-link {{ ($title === "agents")? 'active' : '' }}">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>Agent</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/listing" class="nav-link {{ ($title === "listing")? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Listing</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/article" class="nav-link {{ ($title === "article")? 'active' : '' }}">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Article</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/profile" class="nav-link {{ ($title === "profile")? 'active' : '' }}">
              <i class="nav-icon fas fa-building"></i>
              <p>Profile</p>
            </a>
          </li>

          @can('superadmin')
          <li class="nav-item">
            <a href="/dashboard/user" class="nav-link {{ ($title === "user")? 'active' : '' }}">
              <i class="nav-icon fa fa-user-secret"></i>
              <p>User</p>
            </a>
          </li>
          @endcan



          <li class="nav-item">
            <a href="/dashboard/categoryArticle" class="nav-link {{ ($title === "categoryArticle")? 'active' : '' }}">
              <i class="nav-icon fa fa-list-ol"></i>
              <p>Kategori Article</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/categoryListing" class="nav-link {{ ($title === "categoryListing")? 'active' : '' }}">
              <i class="nav-icon fa fa-list"></i>
              <p>Kategori Listing</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/message" class="nav-link {{ ($title === "message")? 'active' : '' }}">
              <i class="nav-icon fa fa-envelope"></i>
              <p>Pesan</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="/dashboard/testimony" class="nav-link {{ ($title === "testimony")? 'active' : '' }}">
              <i class="nav-icon fa fa-comments"></i>
              <p>Testimoni</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>