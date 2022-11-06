 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img
        src="{{ asset('admin-template/dist/img/AdminLTELogo.png')}}"
        alt="AdminLTE Logo"
        class="brand-image img-circle elevation-3"
        style="opacity: 0.8"
      />
      <span class="brand-text font-weight-light">GAP | Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img
            src="{{ asset('admin-template/dist/img/user2-160x160.jpg')}}"
            class="img-circle elevation-2"
            alt="User Image"
          />
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->access;}}</a>
        </div>
      </div>

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
          
          <?php 
          $access = auth()->user()->access;
          
          if ($access = "Superadmin"){?>
            

<?php            }

          ?>
               
               <li class="nav-item">
                <a href="/dashboard/report" class="nav-link {{ ($title === "report")? 'active' : '' }}">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Report</p>
                </a>
              </li>
           
               

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

          <li class="nav-item">
            <a href="/dashboard/user" class="nav-link {{ ($title === "user")? 'active' : '' }}">
              <i class="nav-icon fa fa-user-secret"></i>
              <p>User</p>
            </a>
          </li>

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

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>