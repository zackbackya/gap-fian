
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top nav-img">
    
    <div class="container ">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="{{ asset('storage/' . $profile->logo_path )}}" alt="..." height="36">
      </a>

      <?php
      
      $judul = explode(' ',$profile->company_name);
      $akhir = array_pop($judul);
      
      $judul1 = $profile->company_name;
      $awal = explode( " ", $judul1 );
              array_splice( $awal, -1 );
      ?>

      <a class="navbar-brand text-brand" href="/">{{ implode( " ", $awal ); }}<span class="color-b"> {{ $akhir }}</span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link {{ ($title === "home")? 'active' : '' }}" href="/" >Home</a>
          </li>

         

          <li class="nav-item">
            <a class="nav-link {{ ($title === "listings")? 'active' : '' }}" href="/listings">Property</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "agents")? 'active' : '' }}" href="/agents">Agents</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "articles")? 'active' : '' }}" href="/articles">Articles</a>
          </li>

          <!--
          <li class="nav-item">
            <a class="nav-link {{ ($title === "about")? 'active' : '' }} " href="/about">About</a>
          </li>
        -->

          <!--
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="property-single.html">Property Single</a>
              <a class="dropdown-item " href="blog-single.html">Blog Single</a>
              <a class="dropdown-item " href="agents-grid.html">Agents Grid</a>
              <a class="dropdown-item " href="agent-single.html">Agent Single</a>
            </div>
          </li>
        -->
          <li class="nav-item">
            <a class="nav-link {{ ($title === "contact")? 'active' : '' }}" href="/contact">Contact</a>
          </li>
        </ul>
      </div>
      <!--
      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>
    -->
    </div>
  
  </nav><!-- End Header/Navbar -->