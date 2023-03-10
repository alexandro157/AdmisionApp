@extends('Admin.index')

@section('area-b-unmsm')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>Examen-Areas</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
<!-- Vendor CSS Files -->
<link href="{{ asset("css/animate.min.css") }}" rel="stylesheet">
<link href="{{ asset("css/aos.css") }}" rel="stylesheet">
<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
<link href="{{ asset("css/bootstrap-icons1.css") }}" rel="stylesheet">
<link href="{{ asset("css/boxicons.min1.css") }}" rel="stylesheet">
<link href="{{ asset("css/glightbox.min1.css") }}" rel="stylesheet">
<link href="{{ asset("css/remixicon1.css") }}" rel="stylesheet">
<link href="{{ asset("css/swiper-bundle.min.css") }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ asset("css/style1.css") }}" rel="stylesheet">
<!-- Template Main CSS File -->



</head>


<body>

        <!-- ======= Header ======= -->
        <header id="header">
          <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
              <h1><a href="{{ url("universidades") }}">Menu<span>.</span></a></h1>
            </div>
          </div>                    
        </header><!-- End Header -->

          <main>

            <!-- ======= SECCION DE EXAMEN - 1 ======= -->

            <section id="services" class="services section-bg">
              <div class="container">

                            <!---------------------TITULO PARA AREAS-------------------->
 
                <div class="section-title" data-aos="zoom-out" value="2">
                    <h2>Examen</h2>
                    <p>Área B: Ciencias Básicas</p>
                </div>
                            <!---------------------COMIENZO DE EXAMEN-------------------->
                                  <!--1-->
                <div class="row">
                  <div class="col-lg-4 col-md-6">
                    <div class="icon-box" data-aos="zoom-in-left">
                      <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                      <h4 class="title"><a href="{{ url("model") }}">2021 - I</a></h4>
                      <p class="description">
                        Banco de examenes
                      </p>
                      </button>        
                    </div>              
                  </div>

                  <!-----================================-->
                  
                <!---=======================================-->
                                
                                    <!--2-->
                  <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
                      <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                      <h4 class="title"><a href="{{ url("model") }}">2021 - II</a></h4>
                      <p class="description">
                        Banco de examenes
                      </p>
                     </div>
                  </div>
                                    
                                          <!--3-->
                  <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
                      <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                      <h4 class="title"><a href="{{ url("model") }}">2022 - I</a></h4>
                      <p class="description">
                        Banco de examenes
                      </p>
                    </div>
                  </div>
                                          <!--4-->
                  <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
                      <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                      <h4 class="title"><a href="{{ url("model") }}">2022 - II</a></h4>
                      <p class="description">
                        Banco de examenes
                      </p>
                       </div>
                  </div>
                                          <!--5-->
                  <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
                      <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                      <h4 class="title"><a href="{{ url("model") }}">2023 - I</a></h4>
                      <p class="description">
                        Banco de examenes
                      </p>
                    </div>
                  </div>
                                          <!--6-->
                  <div class="col-lg-4 col-md-6 mt-5">
                    <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
                      <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                      <h4 class="title"><a href="{{ url("model") }}">2023 - II</a></h4>
                      <p class="description">
                        Banco de examenes
                      </p>
                    </div>
                  </div>
                                          <!--FIN DE 1,2,3,4,5,6-->
                </div>

              </div>
            </section><!-- End Services Section -->
            <!-- ======= FIN DE SECCION DE EXAMEN - 1 ======= -->
        
    
    </main><!-- End #main -->
    




<a href="{{ url("#") }}" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset("js/aos.js") }}"></script>
<script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("js/glightbox.min.js") }}"></script>
<script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
<script src="{{ asset("js/swiper-bundle.min.js") }}"></script>
<script src="{{ asset("js/validate1.js") }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset("js/main.js") }}"></script>

</body>

</html>

@endsection