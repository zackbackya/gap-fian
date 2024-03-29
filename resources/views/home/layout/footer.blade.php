

  <!-- ======= Footer ======= -->
  <section class="section-footer nav-img">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">{{ $profile->company_name }}</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                {{$profile->address}}
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> {{ $profile->phone }}
                </li>
                <li class="color-a">
                  <span class="color-text-a">Whatsapp .</span> {{ $profile->whatsapp }}
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> {{ $profile->email }}
                </li>
              </ul>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </section>
  <footer class="nav-img">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="/">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="/about">About</a>
              </li>
              <li class="list-inline-item">
                <a href="/property">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="/agents">Agents</a>
              </li>
              <li class="list-inline-item">
                <a href="/blog">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="/contact">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a target="_blank" href="http://www.facebook.com/{{ $profile->facebook }}">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="http://www.instagram.com/{{ $profile->instagram }}">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="http://wa.me/{{ $profile->whatsapp }}">
                  <i class="bi bi-whatsapp" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a"><a target="_blank" href="http://intagram.com/zackbackya">zackbackya</a> using EstateAgency Template from W3Layouts.com</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a target="_blank" href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

  

</body>

</html>