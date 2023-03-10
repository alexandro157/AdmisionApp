<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pagina-Admision</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset("/assets/img/favicon.png") }}" rel="icon">
  <link href="{{ asset("/assets/img/apple-touch-icon.png") }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset("css/aos.css") }}" rel="stylesheet">
  
  <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">

  <link href="{{ asset("bootstrap-icons/bootstrap-icons.css")}}" rel="stylesheet">


  <link href="{{ asset("css/boxicons.min.css") }}" rel="stylesheet">


  <link href="{{ asset("css/glightbox.min.css") }}" rel="stylesheet">


  <link href="{{ asset("css/swiper-bundle.min.css") }}" rel="stylesheet">

  <!-- Slider CSS File -->
  <link rel="stylesheet" href="{{ asset("css/slider.css") }}">


  <!-- Template Main CSS File -->
  <link href="{{ asset("css/style.css") }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="{{ url("index.html") }}">Simulador<span>.</span></a></h1>
        <!--Boton incio de session-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="{{ url("login") }}">Iniciar Sesion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-6 py-5 py-lg-0 order-2 order-lg-1" data-aos="fade-right">
        <h1>Simulador de examen de admisión</h1>
        <h2>Ponte a prueba con el mejor simulador y mejora tu capacidad Asegura tu ingreso!</h2>
        <a href="{{ url("#about") }}" class="btn-get-started scrollto">Suegrencias</a>
      </div>
      <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="{{ asset("img/img1.png") }}" class="img-fluid" alt="">
      </div>
    </div>
    </div>

  </section><!-- final de la primera seccion-->

  <main id="main">
  
  <p></p>


  <!-- ======= Slider (INICIO) ======= -->
  <div class="slider">

    <div class="slide-track">
      <div class="row no-gutters clients-wrap clearfix wow fadeInUp">


        <div class="slide">
            <img src="{{ asset("img/uni1.png") }}" alt="">
        </div>
      
        <div class="slide">
            <img  src="{{ asset("img/uni2.png") }}" alt="">
      </div>

        <div class="slide">      
            <img  src="{{ asset("img/uni3.png") }}" alt="">
        </div>

        <div class="slide">
            <img src="{{ asset("img/uni5.png") }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset("img/uni1.png") }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset("img/uni2.png") }}" alt="">
        </div>
        <div class="slide">
            <img  src="{{ asset("img/uni3.png") }}" alt="">
        </div>

        <div class="slide">
            <img src="{{ asset("img/uni5.png") }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset("img/uni1.png") }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset("img/uni2.png") }}" alt="">
        </div>
        <div class="slide">
            <img  src="{{ asset("img/uni3.png") }}" alt="">
        </div>
        <div class="slide">
            <img src="{{ asset("img/uni5.png") }}" alt="">
        </div>
        <div class="slide">
            <img  src="{{ asset("img/uni1.png") }}" alt="">
        </div>
        <div class="slide">
            <img  src="{{ asset("img/uni2.png") }}" alt="">
        </div>
    </div>

</div>
</div>
<p></p>

<!-- ======= Slider prueba (FIN) ======= -->

    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container">

        <div class="row gy-4">
          <div class="image col-xl-5"></div>
          <div class="col-xl-7">
            <div class="content d-flex flex-column justify-content-center ps-0 ps-xl-4">
              <h3 data-aos="fade-in" data-aos-delay="100">Sugerencias para un mejor rendimiento en tu prueba de admisión</h3>
              <p data-aos="fade-in">
                Esta sección esta dedicado a las sugerencias que debes tomar en cuenta cuando vas a rendir una practica un simulacro previo o durante el examen de admision
              </p>
              <div class="row gy-4 mt-3">
                <div class="col-md-6 icon-box" data-aos="fade-up">
                  <i class="bi bi-calendar-check"></i>
                  <h4><a href="{{ url("#") }}">Planifica</a></h4>
                  <p>Planificar es necesario porque tendremos un cronograma cuando  debes rendir tu examen</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bi bi-clipboard2-check"></i>
                  <h4><a href="{{ url("#") }}">Preparate</a></h4>
                  <p>Prepararse antes de rendir tu examen de admision es muy importante ya que te ayudara muchismimo en tu rendimiento</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bi bi-emoji-smile"></i>
                  <h4><a href="{{ url("#") }}">Pierde el miedo</a></h4>
                  <p>Si es la la primera vez que rendrias un examen lo primero es perder el miedo ya que es un factor que influye mucho.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bi bi-hand-thumbs-up"></i>
                  <h4><a href="{{ url("#") }}">Ser positivo</a></h4>
                  <p>Tener una mente positiva te ayudara a tener mucha confianza y no dudarás de tu capacidad</p>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

   
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