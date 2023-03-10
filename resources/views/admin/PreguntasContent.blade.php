
@extends('Admin.index')

@section('preguntas')

<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Vendor CSS Files -->
   <link href="css/aos.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- Template Main CSS File -->
   <link href="{{ asset("css/style.css") }}" rel="stylesheet">
 

    <!-- Titulo de universidades -->
    <h1 class="h1 mb-4 text-gray-800" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif" >Universidades</h1>
     <!-- Boton del modal registro de Universidad -->
    <button type="button" class="mt-1 mx-2 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#miModal">Universidad</button>
    <div class="modal" tabindex="-1" id="miModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Universidad</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        
            <div class="modal-body">
                  <!--Ingreso Nombre de Universidad-->
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Ingrese Nombre de Universidad</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>

                  <!--Subir logo de universidad-->
                  <div class="mb-3">
                    <label for="formFile" class="form-label">Subir logo de universidad</label>
                    <input class="form-control" type="file" id="formFile">
                  </div><br><br>
                   <!-- Bton guardar -->
            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-lg"  href="{{ url("Admin/PreguntasContent") }}">Guardar</button>
            </div>
          </div>
        </div>
      </div>
</div>

<main id="main">

    <!-- ======= Seccion de Univeridades ======= -->
  <main id="main">

    <section id="portfolio" class="portfolio section-bg">
      <div class="container">
        <div class="row portfolio-container" data-aos="fade-up">



          <div class="col-lg-2.5 col-md-3 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/uni1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/uni1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="logo UNI"></a>
                <a href="{{asset('/Universidad')}}"> title="Universidad Nacional de Ingeniería">
                  <h4 class="portfolio-info">Universidad Nacional de Ingeniería</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1955</p>
              </div>
            </div>
          </div>
        </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/unmsm1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unmsm1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="logo UMSM"></a>
                <a href="{{asset('/Universidad')}}"> title="Universidad Nacional Mayor de San Marcos">
                  <h4 class="portfolio-info">Universidad Nacional Mayor de San Marcos</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1551</p>
              </div>
            </div>
          </div>
        </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/unt1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unt1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"></a>
                <a href="{{asset('/Universidad')}}"> title="Universidad Nacional Mayor de San Marcos">
                  <h4 class="portfolio-info">Universidad Nacional de Trujillo</h4></a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1824</p>
              </div>
            </div>
          </div>
        </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/uncp1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/uncp1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"></a>
                <a href="{{asset('/Universidad')}}" title="Universidad Nacional del Centro del Perú">
                  <h4 class="portfolio-info">Universidad Nacional del Centro del Perú</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1962</p>
              </div>
            </div>
          </div>
        </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/unh1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unh1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"></a>
                <a href="{{asset('/Universidad')}}" title="Universidad Nacional de Huancavelica">
                  <h4 class="portfolio-info">Universidad Nacional de Huancavelica</h4></a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1990</p>
              </div>
            </div>
          </div>
        </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-UP">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/ul1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/ul1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"></a>
                <a href="{{asset('/Universidad')}}" title="Universidad de Lima">
                  <h4 class="portfolio-info">Universidad de Lima</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1962</p>
              </div>
            </div>
          </div>
        </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-UP">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/puc1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/puc1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"></a>
                <a href="{{asset('/Universidad')}}" title="Pontificia Universidad Católica del Perú">
                  <h4 class="portfolio-info">Pontificia Universidad Católica del Perú</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1917</p>
              </div>
            </div>
          </div>
        </div>
          

          <div class="col-lg-3 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/unp1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unp1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"></a>
                <a href="{{asset('/Universidad')}}" title="Universidad Nacional de Frontera">
                  <h4 class="portfolio-info">Universidad Nacional de Frontera</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 2010</p>
              </div>
            </div>
          </div>
        </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-UN">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/unc1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unc1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"></a>
                <a href="{{asset('/Universidad')}}" title="Universidad Nacional Autónoma de Chota">
                  <h4 class="portfolio-info">Universidad Nacional Autónoma de Chota</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 2010</p>
              </div>
            </div>
          </div>
        </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-UP">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/puc1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/unmsm1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"></a>
                <a href="{{asset('/Universidad')}}" title="Pontificia Universidad Católica del Perú">
                  <h4 class="portfolio-info">Pontificia Universidad Católica del Perú</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1917</p>
              </div>
            </div>
          </div>
        </div>



          <div class="col-lg-3 col-md-6 portfolio-item filter-UP">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 2px solid #b4b0b0;">
              <img src="{{ asset("img/puc1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/uni1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"></a>
                <a href="{{asset('/Universidad')}}" title="Pontificia Universidad Católica del Perú">
                  <h4 class="portfolio-info">Pontificia Universidad Católica del Perú</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1917</p>
              </div>
            </div>
          </div>
        </div>


          <div class="col-lg-3 col-md-6 portfolio-item filter-UP">
            <div class="portfolio-wrap">
              <div class="card" style=" border: 1px solid #b4b0b0;">
              <img src="{{ asset("img/puc1.jpg") }}" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="{{ url("img/puc1.jpg") }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"></a>
                <a href="{{asset('/Universidad')}}" title="Pontificia Universidad Católica del Perú">
                  <h4 class="portfolio-info">Pontificia Universidad Católica del Perú</h4>
                </a>
              </div>
              <div class="portfolio-info">
                <p>Fundado en: 1917</p>
              </div>
            </div>
          </div>
        </div>

        </div>

      </div>
    </section><!-- final de la seccion universidades-->
  </main><!-- End #main -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
    <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
  </svg></a>
   <!-- Vendor JS Files -->
   <script src="{{ asset("js/aos.js") }}"></script>
   <script src="{{ asset("js/bootstrap.bundle.min.js") }}"></script>
   <script src="{{ asset("js/glightbox.min.js") }}"></script>
   <script src="{{ asset("js/isotope.pkgd.min.js") }}"></script>
   <script src="{{ asset("js/swiper-bundle.min.js") }}"></script>
 
   <!-- Template Main JS File -->
   <script src="{{ asset("/assets/js/main.js") }}"></script>
  
@endsection
