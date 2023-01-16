@include('home.layout.header')

@include('home.layout.navbar')
@include('home.layout.floating')
<!-- ======= Intro Section ======= -->
<div class="intro intro-carousel swiper position-relative">

  <div class="swiper-wrapper">

    <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('home-template/assets/img/slide-1.jpg') }})">
      <div class="overlay overlay-a"></div>
      
    </div>
    <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('home-template/assets/img/slide-2.jpg') }})">
      <div class="overlay overlay-a"></div>
      
    </div>
    <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url({{ asset('home-template/assets/img/slide-3.jpg') }})">
      <div class="overlay overlay-a"></div>
      
    </div>
  </div>
  <div class="swiper-pagination"></div>
</div><!-- End Intro Section -->

<main id="main">


  <!-- ======= Latest Properties Section ======= -->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Listing Properti Terkini</h2>
            </div>
            <div class="title-link">
              <a href="/listings">All Property
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="property-carousel" class="swiper">
        <div class="swiper-wrapper">

          @foreach ($listings as $listing)
          <div class="carousel-item-b swiper-slide">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{ asset('storage/' . $listing->photo_path )}}" alt="" class="img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="property-single.html">{{ $listing->title }}
                        <!--<br /> South Bela Two</a>-->
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">{{ $listing->category_name }} | Rp. {{ number_format($listing->price) }}</span>
                    </div>
                    <a href="property-single.html" class="link-a">Click here to view
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Area</h4>
                        <span>{{ $listing->area_width }}m
                          <sup>2</sup>
                        </span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Beds</h4>
                        <span>{{ $listing->bedroom }}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Baths</h4>
                        <span>{{ $listing->bathroom }}</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Garages</h4>
                        <span>{{ $listing->garage }}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End carousel item -->
          @endforeach          

          
        </div>
      </div>
      <div class="propery-carousel-pagination carousel-pagination"></div>

    </div>
  </section><!-- End Latest Properties Section -->

  <!-- ======= Agents Section ======= -->
  <section class="section-agents section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Agent Terbaik Kami</h2>
            </div>
            <div class="title-link">
              <a href="/agents">Semua Agent
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
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
    </div>
  </section><!-- End Agents Section -->

  <!-- ======= Latest News Section ======= -->
  <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Artikel</h2>
            </div>
            <div class="title-link">
              <a href="/articles">Semua Artikel
                <span class="bi bi-chevron-right"></span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div id="news-carousel" class="swiper">
        <div class="swiper-wrapper">

          
          @foreach ($articles as $article)
              
       

          <div class="carousel-item-c swiper-slide">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="{{ asset('storage/' . $article->photo_path )}}" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-category-b">
                    <a href="#" class="category-b">{{ $article->category_name }}</a>
                  </div>
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="#">{{ $article->title }}
                        
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b">{{ $article->created_at }}</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End carousel item -->

   @endforeach

        </div>
      </div>

      <div class="news-carousel-pagination carousel-pagination"></div>
    </div>
  </section><!-- End Latest News Section -->

  <!-- ======= Testimonials Section ======= -->
  <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Testimoni</h2>
            </div>
          </div>
        </div>
      </div>

      <div id="testimonial-carousel" class="swiper">
        <div class="swiper-wrapper">

          @foreach ($testimonies as $testimony)
         
          <div class="carousel-item-a swiper-slide">
            <div class="testimonials-box">
              <div class="row">
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-img">
                    <img src="{{ asset('storage/' . $testimony->photo_path )}}" alt="{{ $testimony->name }}" class="img-fluid">
                  </div>
                </div>
                <div class="col-sm-12 col-md-6">
                  <div class="testimonial-ico">
                    <i class="bi bi-chat-quote-fill"></i>
                  </div>
                  <div class="testimonials-content">
                    <p class="testimonial-text">
                      {!! $testimony->testimony !!}
                    </p>
                  </div>
                  <div class="testimonial-author-box">
                    <img src="{{ asset('storage/' . $testimony->photo_path )}}" alt="{{ $testimony->name }}" class="testimonial-avatar">
                    <h5 class="testimonial-author">{{ $testimony -> name }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End carousel item -->
               
          @endforeach

        </div>
      </div>
      <div class="testimonial-carousel-pagination carousel-pagination"></div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->
@include('home.layout.footer')
@include('home.layout.script')