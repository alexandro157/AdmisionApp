@extends('Admin.index')

@section('uni')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UNI</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("css/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

  <link href="{{ asset("css/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset("css/style.css") }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1><a href="{{ url("universidades.html") }}">Menu<span>.</span></a></h1>
        </div>
      </div>
    </header><!-- End Header -->

      <main id="main">

           <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
    
                    <div class="swiper-slide">
                      <img src="{{ asset("/img/uni1.jpg") }}" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img src="{{ asset("/img/pabuni1.jpg") }}" alt="">
                    </div>
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-info">
                  <h3>Universidad Nacional de Ingeniería</h3>
                  <ul>
                    <li><strong>Conocé mas sobre nuestros examenes</strong>:</li>
                  </ul>
                  <ul class="list-unstyled list-line mb-5" >
                    <div class="d-grid gap-2 col-6 mx-auto">

                    <a href="{{ url("Area-A-uni") }}">
                    <button type="button" class="btn btn-outline-dark" class="d-grid gap-2 d-md-flex justify-content-md-end"><a href="{{ url("Area-A-uni") }}">Área A</a></button>
                    </a>
                    <a href="{{ url("Area-B-uni") }}">
                    <button type="button" class="btn btn-outline-dark" class="d-grid gap-2 d-md-flex justify-content-md-end"><a href="{{ url("Area-B-uni") }}">Área B</a></button>
                    </a>
                    <a href="{{ url("Area-C-uni") }}">
                    <button type="button" class="btn btn-outline-dark" class="d-grid gap-2 d-md-flex justify-content-md-end"><a href="{{ url("Area-C-uni") }}">Área C</a></button>
                    </a>

                  </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section><!-- End Portfolio Details Section -->
    
        
        </section><!-- End Portfolio Details Section -->
        </section><!-- Breadcrumbs Section -->
    
      </main><!-- End #main -->
      

  <a href="{{ url("#") }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset("js/aos.js") }}"></script>
  <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("js/glightbox.min.js") }}"></script>
  <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>
  <script src="{{ asset("js/validate.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("js/main.js") }}"></script>

</body>

</html>

@endsection