@extends('Admin.index')

@section('examena')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" id="main">
    <div class=" text-bg-body p-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h1>EXAMENES</h1>
               <button type="button" class="mt-1 mx-2 btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#miModal">Registro</button>
               <div class="modal" tabindex="-1" id="miModal">
                   <div class="modal-dialog">
                     <div class="modal-content">
                       <div class="modal-header">
                         <h5 class="modal-title">Registro de Año</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                   
                       <div class="modal-body">
                             <!--Ingrese el año-->
                             <div class="mb-3">
                               <label for="exampleFormControlTextarea1" class="form-label">Ingrese Año</label>
                               <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                             </div>
           
                             
                              <!-- Bton guardar -->
                       <div class="modal-footer">
                         <button type="button" class="btn btn-primary btn-lg"  href="{{ url("Admin/PreguntasContent") }}">Guardar</button>
                       </div>
                     </div>
                   </div>
                 </div>
           </div>
           


           </div>

   <!-- ======= SECCION DE EXAMEN - 1 ======= -->

   <section id="services" class="services section-bg">
     <div class="container">

                   <!---------------------TITULO PARA AREAS-------------------->

       <div class="section-title" >
       
         <p>ÁREA A: Ingeniería</p>
       </div>
                   <!---------------------COMIENZO DE EXAMEN-------------------->
                         <!--1-->
       <div class="row">
         <div class="col-lg-4 col-md-6">
           <div class="icon-box" data-aos="zoom-in-left">
             <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
             <h4 class="title"><a href="boque.html">2021 - I</a></h4>
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
             <h4 class="title"><a href="boque.html">2021 - II</a></h4>
             <p class="description">
               Banco de examenes
             </p>
            </div>
         </div>
                           
                                 <!--3-->
         <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
           <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
             <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
             <h4 class="title"><a href="boque.html">2022 - I</a></h4>
             <p class="description">
               Banco de examenes
             </p>
           </div>
         </div>
                                 <!--4-->
         <div class="col-lg-4 col-md-6 mt-5">
           <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
             <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
             <h4 class="title"><a href="boque.html">2022 - II</a></h4>
             <p class="description">
               Banco de examenes
             </p>
              </div>
         </div>
                                 <!--5-->
         <div class="col-lg-4 col-md-6 mt-5">
           <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
             <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
             <h4 class="title"><a href="boque.html">2023 - I</a></h4>
             <p class="description">
               Banco de examenes
             </p>
           </div>
         </div>
                                 <!--6-->
         <div class="col-lg-4 col-md-6 mt-5">
           <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
             <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
             <h4 class="title"><a href="boque.html">2023 - II</a></h4>
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
</div>
</div>



@endsection
