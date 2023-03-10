<html lang="es" class="js "><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

            
    <!-- CSRF Token -->
    <meta name="csrf-token" content="">
    <title>Pagina principal Admision </title>
    <link href="{{ asset("css/app.css") }}" rel="stylesheet">
    <link href="{{ asset("css/logo.css") }}" rel="stylesheet">
    <link href="{{ asset("css/boton.css") }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://connect.facebook.net/signals/config/132408752165138?v=2.9.95&amp;r=stable" async=""></script><script src="https://connect.facebook.net/signals/config/2072496249683294?v=2.9.95&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-122594926-1"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link href="{{ asset("css/style1.css") }}" rel="stylesheet">
</head>

<body>


     <!-- SECCION DEL BANNER Y BTN DE INCIAR EXAMEN Y SUSCRIBIRSE -->
<div id="app-simulacro">
    <div class="card text-bg-white">
        <!-- BANNER -->
        <img src="{{ asset("/img/banner.jpg") }}" class="card-img" alt="..." >
        <div class="card-img-overlay">
      <!-- SECCION BTN DE INCIAR EXAMEN Y SUSCRIBIRSE -->    
<div class="app-simulacro-crear-mobile">
    <div id="main-menu">


<h1  class="h1" >Comienza con tu exámen</h1>

<div class="containiner-fluid">
    <div class="card" style="height: 80%;  width: 23%;  background-color: rgba(180, 173, 173, 0.658);">
        <div class="card-body">
    <h1 class="uni"  style="font-size: 120%;">Universidad</h1>
    <select class="form-select" aria-label="Default select example" style="width: 100%;">
       
        <option selected>[Universidad]</option>
        <option value="1">Universidad Nacional de San Marcos</option>
        <option value="2">Universidad Nacional de Ingeniería</option>
        <option value="3">Universidad Peruana de Ciencias</option>
      </select><br>

      <h2 class="carr" style="font-size: 120%;">Carrera</h2>
      <select class="form-select" aria-label="Default select example" style="width: 99%;">
        
        <option selected>[Carrera]</option>
        <h2>Elije Carrera</h2>
        <option value="1">Medicina</option>
        <option value="2">Arquitectura</option>
        <option value="3">Ingeniería Ambiental</option>
      </select><br>


      <div class="row">
        <div class="col">
            <a href="{{ url("examen") }}">
           <button type="button" class="btn btn-custom-azul m-2"  data-toggle="modal" data-target="#modal_simulacros" style="width: 89%;">Iniciar Examen 
            </button>
        </a>
        </div></div>
    </div>
</div>





        <a href="Login">
        <button type="button" class="btn1 btn-primary btn-lg" style="border-radius: 10px;">Cerrar Sesion<i class="bi bi-person-lock"></i></button>
    </a>
        <a href="{{ url("Pago") }}">
        <button type="button" class="btn2 btn-primary btn-lg" style="border-radius: 10px;"><i class="bi bi-arrow-90deg-right"></i>Suscribirse</button>
    </a>
</div>
</div>


  <!-- BTN DE  INCIAR EXAMEN -->  
    <div class="container" id="app-simulacro-crear">
     
        </div></div>
</div></div>

        <div class="app-simulacro-container" id="app-simulacro-data">    
        <div class="d-flex flex-column flex-md-row justify-content-center app-simulacro-row">
            <div class="app-simulacro-lista pb-5" id="app-simulacro-data-sim">
                          
 <!--  inicio -->

 <div class="header text-center text-md-left">
    <h4 class="text-pi-azul">Resultados</h4>
</div>

<div class="sim-thumb-list">
    <div class="sim-thumb normal">
        <div class="avance-movil-holder d-md-none">
            <div>           
                <div class="avance avance-movil avance-escudo">
                    <img src="https://new.simbox.edu.pe/storage/institutions/nBgj0V85o0669uZFvaJuNZTdQ7KtmrCejuiAdjpO.png" class="img-fluid" alt="">
                </div>           
            </div>
        </div>
            <div class="row">        
                <div class="col escudo d-none d-md-block">           
                    <img src="https://new.simbox.edu.pe/storage/institutions/nBgj0V85o0669uZFvaJuNZTdQ7KtmrCejuiAdjpO.png" class="img-fluid" alt="">           
                </div>
                <div class="col">
                    <div class="row">
                        <div class="col">                    
                            <div class="text-center text-md-left">
                            </div>
                            <!---------------------------------------->

                                <div class="container my-3">
                                    <div class="row">
                                        <div class="bg-success-subtle-opacity-25">
                                            <hr>
                                                        <!----=========================-->
                                                <div class="container text-center">
                                                    <div class="row align-items-start">
                                                        <!--------columna 1-->
                                                        <div class="col">
                                                            <h5>Resultado total</h5>
                                                            <form >
                                                                <ul><p class="fw-semibold text-sm-start">Preguntas correctas:</p>
                                                                    <div class="col">
                                                                        <div class="col">                                            
                                                                            <div style="    width: 60px;
                                                                            height: 60px;
                                                                            border-radius: 30px;
                                                                            background-color: #44a6f6;
                                                                            color: #ffffff;
                                                                            text-align: center;
                                                                            font-size: 20px;
                                                                            line-height: 60px;
                                                                            margin: 10px auto 20px auto;
                                                                            ">86</div> 
                                                                        </div>
                                                                    </div>       
                                                                </ul>
                                                                <ul><p class="fw-semibold text-sm-start">Preguntas incorrectas:</p>
                                                                    <div class="col">
                                                                        <div class="col">                                            
                                                                            <div style="    width: 60px;
                                                                            height: 60px;
                                                                            border-radius: 30px;
                                                                            background-color: #44a6f6;
                                                                            color: #ffffff;
                                                                            text-align: center;
                                                                            font-size: 20px;
                                                                            line-height: 60px;
                                                                            margin: 10px auto 20px auto;
                                                                            ">86</div> 
                                                                        </div>
                                                                    </div> 
                                                                </ul>
                                                                
                                                            </form>
                                                        </div>
                                                        <!----------fin columna 1-->
                                                        <!--------columna 2-->
                                                        <div class="col">
                                                            <h5>Ingresaste: 1° Opcion</h5>
                                                            <form >
                                                                <ul><p class="fw-semibold text-sm-start">Total de Notas</p>
                                                                    <div class="col">                                            
                                                                        <div style="    width: 60px;
                                                                        height: 60px;
                                                                        border-radius: 30px;
                                                                        background-color: #44a6f6;
                                                                        color: #ffffff;
                                                                        text-align: center;
                                                                        font-size: 20px;
                                                                        line-height: 60px;
                                                                        margin: 10px auto 20px auto;
                                                                        ">17.80</div> 
                                                                    </div>       
                                                                </ul>                                                                                
                                                            </form>
                                                        </div>
                                                        <!----------fin columna 2-->

                                                        <!--------columna 3-->
                                                        <div class="col">
                                                            <h5>Ingresa a la carrera</h5>
                                                            <form >
                                                                <ul><p class="fw-semibold text-sm-start">Ingenieria Civil</p>
                                                                    <div  class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                        <!-- BTN DE  para revisar todo el examen que dio -->  
                                                                        <a href="{{ url("") }}" class="btn" style="
                                                                                color: #ffff !important;
                                                                                background: #103f6e;
                                                                                border-color: #103f6e !important;
                                                                            ">Revisar</a>
                                                                    </div>
                                                                          
                                                                </ul>
                                                            </form>
                                                        </div>
                                                        <!----------fin columna 3-->
                                                    </div>
                                                </div>
                                                            <!----=========================-->

                                        </div>
                                    </div>
                                </div>

                            <!---------------------------------------->

                        

                            <!---------------------------------------->

                            <div class="container my-3">
                                <div class="row">
                                    <div class="bg-success-subtle-opacity-25">
                                        <hr>
                                        <h5>Pudiste Ingresar a las siguientes carreras</h5>
                                        <form >
                    
                                            <!---------------------COMIENZO DE EXAMEN-------------------->
           
                                            <section id="services" class="services section-bg">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="icon-box" data-aos="zoom-in-left">
                                                            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                                                            <h4 class="title"><a href="{{ url("model.html") }}">Ingeniería Civil</a></h4>
                                                             <!------------->
                                                             <ul><p class="fw-semibold text-sm-start">Total de Notas</p>
                                                                <div class="col">                                            
                                                                    <div style="    width: 60px;
                                                                    height: 60px;
                                                                    border-radius: 30px;
                                                                    background-color: #44a6f6;
                                                                    color: #ffffff;
                                                                    text-align: center;
                                                                    font-size: 20px;
                                                                    line-height: 60px;
                                                                    margin: 10px auto 20px auto;
                                                                    ">17.80</div> 
                                                                </div>       
                                                                </ul> 
                                                             <!------------->       

                                                            <div  class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                <!-- BTN DE  para revisar todo el examen que dio -->  
                                                                    <a href="{{ url("") }}" class="btn" style="
                                                                        color: #ffff !important;
                                                                        background: #103f6e;
                                                                        border-color: #103f6e !important;
                                                                    ">Revisar</a>
                                                            </div>                                                                                              
                                                            </div>              
                                                        </div>
                                                    
                                                            <!--------------------- FIN COMIENZO DE EXAMEN-------------------->
                                                            <!---------------------COMIENZO DE EXAMEN-------------------->
                        
   
                                                        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                                                            <div class="icon-box" data-aos="zoom-in-left">
                                                            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                                                            <h4 class="title"><a href="{{ url("model.html") }}">Ingeniería Civil</a></h4>
                                                            <!------------->
                                                            <ul><p class="fw-semibold text-sm-start">Total de Notas</p>
                                                                <div class="col">                                            
                                                                    <div style="    width: 60px;
                                                                    height: 60px;
                                                                    border-radius: 30px;
                                                                    background-color: #44a6f6;
                                                                    color: #ffffff;
                                                                    text-align: center;
                                                                    font-size: 20px;
                                                                    line-height: 60px;
                                                                    margin: 10px auto 20px auto;
                                                                    ">17.80</div> 
                                                                </div>       
                                                                </ul> 
                                                             <!------------->   
                                                            <div  class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                <!-- BTN DE  para revisar todo el examen que dio -->  
                                                                    <a href="{{ url("") }}" class="btn" style="
                                                                        color: #ffff !important;
                                                                        background: #103f6e;
                                                                        border-color: #103f6e !important;
                                                                    ">Revisar</a>
                                                            </div>                                                                                              
                                                            </div>              
                                                        </div>
                                                
                                                                <!--------------------- FIN COMIENZO DE EXAMEN-------------------->

                                                                <!---------------------COMIENZO DE EXAMEN-------------------->
           

                                                        <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                                                            <div class="icon-box" data-aos="zoom-in-left">
                                                            <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                                                            <h4 class="title"><a href="{{ url("model.html") }}">Ingeniería Civil</a></h4>
                                                            <!------------->
                                                            <ul><p class="fw-semibold text-sm-start">Total de Notas</p>
                                                                <div class="col">                                            
                                                                    <div style="    width: 60px;
                                                                    height: 60px;
                                                                    border-radius: 30px;
                                                                    background-color: #44a6f6;
                                                                    color: #ffffff;
                                                                    text-align: center;
                                                                    font-size: 20px;
                                                                    line-height: 60px;
                                                                    margin: 10px auto 20px auto;
                                                                    ">17.80</div> 
                                                                </div>       
                                                                </ul> 
                                                             <!------------->
                                                              
                                                            <div  class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                <!-- BTN DE  para revisar todo el examen que dio -->  
                                                                    <a href="{{ url("") }}" class="btn" style="
                                                                        color: #ffff !important;
                                                                        background: #103f6e;
                                                                        border-color: #103f6e !important;
                                                                    ">Revisar</a>
                                                            </div>                                                                                              
                                                            </div>              
                                                        </div>
                                                   

                                                                <!--------------------- FIN COMIENZO DE EXAMEN-------------------->

                                                    </div>          
                                                    
                                                </div>
                                            </section>
                                </div>
                            </div>
                            </div>    

                        <!---------------------------------------->



                     
                        </div>
                    </div>
                </div>   
            </div>
    </div>
</div>
</div> 


    <!-- TABLA DE RESULTADOS- bara de menus -->  
    <div class="app-simulacro-stats" id="app-simulacro-data-stats">                                         
        <div class="header">
            <h4>Tus Resultados</h4><p>Tabla de resultados del examen.</p>
            <form class="custom">
                <div class="form-group">   
                    <select name="stats_institutions" id="stats_institutions" class="form-control">
                    <option value="1" data-ka="">Universidad Nacional de Ingeniería</option>
                    </select>
                </div>
            </form>
        </div>
                
            <ul class="list-unstyled" id="stats_institutions_ka"><li>
                <h6>Razonamiento Matemático</h6>
                    <div class="d-flex justify-content-between">
                        <div>0% Progreso total</div>
                        <div>0 / 7</div>
                    </div>
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

        </li><li>
            <h6>Razonamiento Verbal</h6>
            <div class="d-flex justify-content-between">
                <div>14% Progreso total</div>
                <div>1 / 7</div>
            </div>
            
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 14%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100"></div>
            </div>

        </li><li>
            <h6>Economía</h6>
                <div class="d-flex justify-content-between">
                    <div>20% Progreso total</div>
                    <div>1 / 5</div>
                </div>
                
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            </li><li>
                
                <h6>Psicología</h6>
                <div class="d-flex justify-content-between">
                    <div>0% Progreso total</div>
                    <div>0 / 5</div>
                </div>
                
                <div class="progress">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

            </li>
                
            
            

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true" style="color: #000000;">Ver menos</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" style="color: #000000;">Ver mas</button>
                </li>
            </ul>

            <li class="nav-item">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="app-simulacro-stats" id="app-simulacro-data-stats">
                        <ul ul class="list-unstyled" id="stats_institutions_ka">
                            <img src="{{ asset("img/final.svg") }}"><p>Fin</p>
                        </ul>
                    </div>
                </div></li>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                    <li>
                        <h6>Geometria</h6>
                            <div class="d-flex justify-content-between">
                                <div>0% Progreso total</div>
                                <div>0 / 7</div>
                            </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li>
                        <h6>Trigonometria</h6>
                            <div class="d-flex justify-content-between">
                                <div>0% Progreso total</div>
                                <div>0 / 7</div>
                            </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li>
                        <h6>Biologia</h6>
                            <div class="d-flex justify-content-between">
                                <div>0% Progreso total</div>
                                <div>0 / 7</div>
                            </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                    <li>
                        <h6>Algebra</h6>
                            <div class="d-flex justify-content-between">
                                <div>0% Progreso total</div>
                                <div>0 / 7</div>
                            </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </li>
                </div>
              
            </div>
        
    </div>
</div>
</div>
</div>




<!-------------------------------------------------->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
</button>
</div>
</div>
</div>
</div>



<!-------------------------------------------------->
<div id="session-message-holder"></div>
<div id="sidebar-menu-overlay"></div>

<div id="sidebar-menu">

<div class="holder">
<div class="content">

<div class="content-header">
    <div class="text-right btn-close">
        <a class="btn btn-link"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg></i></a>
    </div>
</div>



</div>
</div>
</div>


<!-------------------------------------------------->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script src="{{ asset("/main.js") }}"></script>

</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true">
</grammarly-desktop-integration>
</html>