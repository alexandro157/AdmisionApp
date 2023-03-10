@extends('Admin.index')

@section('universidades')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Universidades</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Vendor CSS Files -->
  <link href="{{ asset("css/aos.css") }}" rel="stylesheet">
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="{{ asset("css/style.css") }}" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1><a href="{{ url("index.html") }}">Menu<span>.</span></a></h1>
        </div>
      </div>
    </header><!-- End Header -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">UNIVERSIDADES</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              <li data-filter=".filter-UP">Universidades-Privadas</li>
              <li data-filter=".filter-UN">Universidades-Nacionales</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/uni1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/uni1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="logo UNI"></a>
                <a href="{{ url("UNI") }}" title="More Details">
                  <h4 class="portfolio-info">Universidad Nacional de Ingeniería</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1955</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/unmsm1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unmsm1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="logo UMSM"></a>
                <a href="{{ url("UNMSM") }}" title="More Details">
                  <h4 class="portfolio-info">Universidad Nacional Mayor de San Marcos</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1551</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/unt1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unt1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"></a>
                <a href="{{ url("UNMSM.html") }}" title="More Details">
                  <h4 class="portfolio-info">Universidad Nacional de Trujillo</h4></a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1824</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/uncp1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/uncp1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"></a>
                <a href="{{ url("UNI.html") }}" title="More Details">
                  <h4 class="portfolio-info">Universidad Nacional del Centro del Perú</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1962</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/unh1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unh1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"></a>
                <a href="{{ url("UNMSM.html") }}" title="More Details">
                  <h4 class="portfolio-info">Universidad Nacional de Huancavelica</h4></a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1990</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UP">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/ul1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/ul1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"></a>
                <a href="{{ url("UNMSM.html") }}" title="More Details">
                  <h4 class="portfolio-info">Universidad de Lima</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1962</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UP">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/puc1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/puc1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"></a>
                <a href="{{ url("UNMSM.html") }}" title="More Details">
                  <h4 class="portfolio-info">Pontificia Universidad Católica del Perú</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1917</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/unp1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unp1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"></a>
                <a href="{{ url("UNMSM.html") }}" title="More Details">
                  <h4 class="portfolio-info">Universidad Nacional de Frontera</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 2010</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <img src="{{ asset("/img/unc1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unc1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"></a>
                <a href="{{ url("UNMSM.html") }}" title="More Details">
                  <h4 class="portfolio-info">Universidad Nacional Autónoma de Chota</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 2010</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
  </main><!-- End #main -->
  <a href="{{ url("#") }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{ asset("js/aos.js") }}"></script>
  <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("js/glightbox.min.js") }}"></script>
  <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
  <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset("js/main.js") }}"></script>

</body>

</html>

@endsection