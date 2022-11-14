@include('home.layout.header')

@include('home.layout.navbar')
@include('home.layout.floating')
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">{{ $listing->title }}</h1>
              <span class="color-text-a">{{ $listing->address }}</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="/{{ $title }}">{{ $title }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  {{ $listing->title }}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    
        
  
    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('storage/' . $listing->photo_path )}}" alt="">
                </div>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <span class="bi bi-cash">Rp</span>
                    </div>
                    <div class="card-title-c align-self-center">
                      <h5 class="title-c">{{ number_format($listing->price) }}</h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Quick Summary</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list"><li class="d-flex justify-content-between">
                        <strong>Alamat:</strong>
                        <span>{{ $listing->address }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Property Type:</strong>
                        <span>{{ $listing->type }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Status:</strong>
                        <span>{{ $listing->category_name }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Luars Area:</strong>
                        <span>{{ $listing->area_width }}m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tempat Tidur:</strong>
                        <span>{{ $listing->bedroom }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Kamar Mandi:</strong>
                        <span>{{ $listing->bathroom }}</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Garasi:</strong>
                        <span>{{ $listing->garage }}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Deskripsi Properti</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    {{$listing->description}}
                  </p>
                </div>
               
               
              </div>
            </div>
          </div>
         
          <div class="col-md-14 center">
            <div class="row section-t3">
              <div class="col-sm-12">
                <div class="title-box-d">
                  <h3 class="title-d">Contact Agent</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <img src="{{ asset('storage/' . $listing->photo_agent )}}" alt="" class="img-fluid">
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="property-agent">
                  <h4 class="title-agent">{{ $listing->name }}</h4>
                                    <ul class="list-unstyled">
                    <li class="d-flex justify-content-between">
                      <strong>Phone / Whatsapp:</strong>
                      <span class="color-text-a">{{ $listing->whatsapp }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>Email:</strong>
                      <span class="color-text-a">{{ $listing->email }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>facebook:</strong>
                      <span class="color-text-a">www.facebook.com/{{ $listing->facebook }}</span>
                    </li>
                    <li class="d-flex justify-content-between">
                      <strong>instagram:</strong>
                      <span class="color-text-a">www.instagram.com/{{ $listing->instagram }}</span>
                    </li>
                  </ul>
                  <div class="socials-a">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="https://www.facebook.com/{{ $listing->facebook }}">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="https://www.instagram.com/{{ $listing->instagram }}">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="https://www.wa.me/{{ $listing->whatsapp }}">
                          <i class="bi bi-whatsapp" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->
  
  </main><!-- End #main -->
  @include('home.layout.footer')
  @include('home.layout.script')