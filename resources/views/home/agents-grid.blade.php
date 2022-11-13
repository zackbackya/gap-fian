@include('home.layout.header')

@include('home.layout.navbar')

  <main id="main">
    <!-- =======Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Agents</h1>
              <span class="color-text-a"></span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Agents
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Agents Grid ======= -->
    <section class="agents-grid grid">
      <div class="container">
        <div class="row">
           
          @foreach ($agents as $agent)
              
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="{{ asset('storage/' . $agent->photo_path )}}" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">{{ $agent->name }}
                        <!--<br> Cascada</a>-->
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <!--
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                -->
                 
                </div>
                <div class="card-footer-d">
                  <div class="info-agents color-a d-flex justify-content-center">
                    <p>
                      <a href="http://wa.me/{{ $agent->whatsapp }}" class="link-one">
                      <strong><i class="bi bi-whatsapp" aria-hidden="true"></i> </strong> {{ $agent->whatsapp }}
                    </p>
                    
                  </div>
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="http://www.facebook.com/{{ $agent->facebook }}" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="http://www.instagram.com/{{ $agent->instagram }}" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="http://wa.me/{{ $agent->whatsapp }}" class="link-one">
                          <i class="bi bi-whatsapp" aria-hidden="true"></i>
                        </a>
                      </li>
                    
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="bi bi-chevron-left"></span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="#">
                    <span class="bi bi-chevron-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Agents Grid-->

  </main><!-- End #main -->


  @include('home.layout.footer')
  @include('home.layout.script')