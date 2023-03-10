<html lang="es" class="js "><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admisión-App </title>    
  <link href="{{ asset("css/examen.css") }}" rel="stylesheet">
  <link href="{{ asset("css/exa1.css") }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" rel="stylesheet">
  <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script src="https://connect.facebook.net/signals/config/2072496249683294?v=2.9.95&amp;r=stable" async=""></script>
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-122594926-1"></script>  
</head>
<body >
<div id="sim" style="">
       
      <!-- *************************************MENU ********************************************** -->
      
<div id="content" class="sim-holder">
  <div id="sim-holder" data-save-url="">
      <div class="header">
          <div class="container">
            <!-- **************  Nombre de la Universidad y la carrera ** -->
              <div class="row no-gutters align-items-center">
                  <div class="col">
                      <h4 id="carrera" class="m-0">Ingeniería Física</h4>
                      <small id="institucion">Universidad Nacional de Ingeniería</small>
                  </div>
              </div>

          </div>
      </div>

        <!-- Inicia barra de estado -->   
      <div class="pt-4" id="sim-holder-content"><div class="d-flex pb-3 flex-column flex-md-row justify-content-center">
      <div class=" col fixed sim-question-details info-cronometro" style="z-index: 10;
               background: transparent;background: transparent;">
                  <div class="d-flex align-items-center"></div><br>
<small class="stats-responsed">
<span id="stats-responsed">1</span> de <span id="stats-total">100</span> Preguntas resueltas
</small>

<!-----------------------CRONOMETRO------->  
<div class="bg-pi-blanco rounded p-1">
<div class="progress">
  <div class="progress-bar" id="stats-percent" role="progressbar" style="width: 5%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="pt-3 "><h4 id="cronometro" class="m-0">02:59:50</h4></div>

<form class="custom" onsubmit="return false">
<div class="pt-3">
  <select id="items_per_page" class="form-control">
      
      <option value="5" selected="">5 preguntas</option>
      <option value="10">10 preguntas</option>
      <option value="20">20 preguntas</option>
  </select>
</div>
<div class="pt-3">
  <select id="custom_show" class="form-control">
      <option value="0" selected="">Mostrar todas</option>
      <option value="1">Mostrar pendientes</option>
  </select>
</div>
</form>

<!-- ---Inicia barra de estado---- -->  

<div class="pt-3 text-center">
<form id="form_exit" name="form_exit" method="post" action="">
  <input type="hidden" name="_token" value="">
  <input type="hidden" name="id" value="">
</form>
<button type="button" class="btn btn-custom-outline-rojo btn-custom-fluid d-none d-lg-block btn-finalize mt-3">
  <span>Finalizar</span></button></div></div>

                <!-- -----Inicia grupo de preguntas--- -->
              <div class="col"></div>
              <div class="col-sm-12 col-md-7 col-lg-8 col-xl-9 sim-question-wrapper ">
            <div class="sim-question-holder mx-auto"><div id="formQuestionsExam"><div>


  <!--------------------------PREGUNTA 1------------------------>
  <form onsubmit="return false">
   
    <div class="sim-question-item">

        <div class="row">
            <div class="col">
                <small>Pregunta <span class="sim-pregunta-contador">1</span></small>
            </div>
            <div class="col text-right">
                <small><span class="sim-area-academica">Matemática</span></small>
            </div> </div>
        <div class="sim-question-descripcion"><p>Mide el area de un cuadrado<br></p></div>
        <div id="sim-question-answers-tpl" style="display: none"> 
         </div>
        <!--------------------------Alternativas----------------------->
        <form onsubmit="return false">
            <div class="sim-question-answers"><div>
                
            <label class="label-control d-block w-100">
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id="10657">
                    </div>
                    <div class="flex-fill sim-question-answers-descripcion"><p> 1 240 π<br></p></div>
                </div></label>
        </div><div>
                
            <label class="label-control d-block w-100">
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id="10657"></div>
                    <div class="flex-fill sim-question-answers-descripcion"><p>1 340 π<br></p></div>
                </div></label>
        </div><div>
                
            <label class="label-control d-block w-100">
                
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                    </div>
                    <div class="flex-fill sim-question-answers-descripcion"><p> 1 440 π<br></p></div>
                </div>
            </label>
        </div><div>
                
            <label class="label-control d-block w-100">
                
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id=""></div>
                    <div class="flex-fill sim-question-answers-descripcion"><p> 1 540 π<br></p></div>
                </div>
            </label></div><div>
                
            <label class="label-control d-block w-100">
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id=""></div>
                    <div class="flex-fill sim-question-answers-descripcion"><p>1 640 π<br></p></div></div>
            </label>
        </div></div>
    </form></div>
</div><div>
      



<!--------------------------FIN DE PREGUNTA 2------------------------>
    <div class="sim-question-item">
        <div class="row">
            <div class="col">
                <small>Pregunta <span class="sim-pregunta-contador">2</span></small>
            </div>
            <div class="col text-right">
                <small><span class="sim-area-academica">Matemática</span></small>
            </div></div>
    
        <div class="sim-question-descripcion"><p>Un stand de una feria de libros tiene un piso rectangular y  el techo tiene una forma
      semicilíndrica<br></p></div>  
        <form onsubmit="return false">
            <div class="sim-question-answers"><div>        
        <label class="label-control d-block w-100">
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                    </div>
                    <div class="flex-fill sim-question-answers-descripcion"><p> 1 240 π<br></p></div>
                </div>  
            </label>
        </div><div>
                
            <label class="label-control d-block w-100">
                
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                    </div>
                    <div class="flex-fill sim-question-answers-descripcion"><p>1 340 π<br></p></div>
                </div>
            </label>
        </div><div>
                
            <label class="label-control d-block w-100">
                
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                    </div>
                    <div class="flex-fill sim-question-answers-descripcion"><p> 1 440 π<br></p></div>
                </div>
            </label>
        </div><div>
                
            <label class="label-control d-block w-100">
                
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                    </div>
                    <div class="flex-fill sim-question-answers-descripcion"><p> 1 540 π<br></p></div>   
                </div>
            </label></div><div>
                
            <label class="label-control d-block w-100">
                
                <div class="d-flex d-flex justify-content-between">
                    <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                        <input type="radio" name="sim-question-answers-response" value="52575" data-sim_id="10657">
                    </div>
                    <div class="flex-fill sim-question-answers-descripcion"><p>1 640 π<br></p></div>      
                </div>
            </label>
        </div></div>
        </form>
       </div>
    </div><div><br><br>
      
<!--------------------------FIN DE PREGUNTA 3------------------------>

<div class="sim-question-item">
    <div class="row">
        <div class="col">
            <small>Pregunta <span class="sim-pregunta-contador">3</span></small>
        </div>
        <div class="col text-right">
            <small><span class="sim-area-academica">Matemática</span></small>
        </div></div>

    <div class="sim-question-descripcion"><p>Un stand de una feria de libros tiene un piso rectangular y  el techo tiene una forma
  semicilíndrica<br></p></div>  
    <form onsubmit="return false">
        <div class="sim-question-answers"><div>        
    <label class="label-control d-block w-100">
            <div class="d-flex d-flex justify-content-between">
                <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                    <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                </div>
                <div class="flex-fill sim-question-answers-descripcion"><p> 1 240 π<br></p></div>
            </div>  
        </label>
    </div><div>
            
        <label class="label-control d-block w-100">
            
            <div class="d-flex d-flex justify-content-between">
                <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                    <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                </div>
                <div class="flex-fill sim-question-answers-descripcion"><p>1 340 π<br></p></div>
            </div>
        </label>
    </div><div>
            
        <label class="label-control d-block w-100">
            
            <div class="d-flex d-flex justify-content-between">
                <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                    <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                </div>
                <div class="flex-fill sim-question-answers-descripcion"><p> 1 440 π<br></p></div>
            </div>
        </label>
    </div><div>
            
        <label class="label-control d-block w-100">
            
            <div class="d-flex d-flex justify-content-between">
                <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                    <input type="radio" name="sim-question-answers-response" value="" data-sim_id="">
                </div>
                <div class="flex-fill sim-question-answers-descripcion"><p> 1 540 π<br></p></div>   
            </div>
        </label></div><div>
            
        <label class="label-control d-block w-100">
            
            <div class="d-flex d-flex justify-content-between">
                <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                    <input type="radio" name="sim-question-answers-response" value="52575" data-sim_id="10657">
                </div>
                <div class="flex-fill sim-question-answers-descripcion"><p>1 640 π<br></p></div>      
            </div>
        </label>
    </div></div>
    </form>
   </div>
</div><div><br><br>


<!--------------------------PREGUNTA 4------------------------>
<div class="sim-question-item">
  <div class="row">
      <div class="col">
          <small>Pregunta <span class="sim-pregunta-contador">4</span></small>
      </div>
      <div class="col text-right">
          <small><span class="sim-area-academica">Matemática</span></small></div></div>
  <div class="sim-question-descripcion"><p>Calcule el valor de&nbsp;<br></p></div>
  <div id="sim-question-answers-tpl" style="display: none"> 
      <label class="label-control d-block w-100">
          <div class="d-flex d-flex justify-content-between">
              <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                  <input type="radio" name="sim-question-answers-response">
              </div>
              <div class="flex-fill sim-question-answers-descripcion"></div>    
          </div>
      </label>
  </div>
  
  <form onsubmit="return false">
      <div class="sim-question-answers">
          
      <div>
          
      <label class="label-control d-block w-100">
          
          <div class="d-flex d-flex justify-content-between">
              <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                  <input type="radio" name="sim-question-answers-response" value="49193" data-sim_id="9982">
              </div>
              <div class="flex-fill sim-question-answers-descripcion"><p>4</p></div>
          </div>
      </label>
  </div><div>
          
      <label class="label-control d-block w-100">
          
          <div class="d-flex d-flex justify-content-between">
              <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                  <input type="radio" name="sim-question-answers-response" value="49194" data-sim_id="9982">
              </div>
              <div class="flex-fill sim-question-answers-descripcion"><p>6</p></div>
          </div>
      </label>
  </div><div>
          
      <label class="label-control d-block w-100">
          
          <div class="d-flex d-flex justify-content-between">
              <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                  <input type="radio" name="sim-question-answers-response" value="49195" data-sim_id="9982">
              </div>
              <div class="flex-fill sim-question-answers-descripcion"><p>8</p></div>
          </div>
      </label>
  </div><div>
          
      <label class="label-control d-block w-100">
          
          <div class="d-flex d-flex justify-content-between">
              <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                  <input type="radio" name="sim-question-answers-response" value="49196" data-sim_id="9982">
              </div>
              <div class="flex-fill sim-question-answers-descripcion"><p>10</p></div>
           </div>
      </label>
  </div><div>
          
      <label class="label-control d-block w-100">
          <div class="d-flex d-flex justify-content-between">
              <div class="text-center sim-question-answers-radio" style="min-width: 30px">
                  <input type="radio" name="sim-question-answers-response" value="49197" data-sim_id="9982">
              </div>
              <div class="flex-fill sim-question-answers-descripcion"><p>12</p></div>
          </div>
      </label>
  </div></div>
  </form><!--------------------------FIN DE PREGUNTAS------------------------>

  <!--------------------------ICONOS DE ROTECEDER Y AVANZAR PREGUNTAS------------------------>
</div>
</div></div></div>
                  <div class="mt-3">
                      <div class="col text-center">        
                          <a href="{{ url("#") }}" class="btn btn-text btn-prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                            </svg></a>
                          <a href="{{ url("#") }}" class="btn btn-text text-center btn-next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg></a>
                            <button type="button" class="btn btn-danger text-center btn-finalize" style="display: none">Finalizar</button> 
                      </div></div><!-----------------------Modal de finalizo el examen------------------------->




<!-----------------------ICONO DE SUBIR HACIA ARRIBA------------------------->
<div id="go-top">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
  <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
</svg></div>

</div><div class="modal custom fade" id="finalizar_modal" tabindex="-1" role="dialog" aria-labelledby="finalizar_modalLabel" aria-hidden="true">
<div class="modal-dialog modal-sm" role="document">
  <form id="delete_activity_form" action="" method="post" class="modal-content text-danger">
      <!-----------------------ALERTA DE FINALIZAR EXAMEN------------------------->
      <div class="modal-custom-header">
          <h5 class="modal-title text-danger" id="finalizar_modalLabel">¿Estás seguro de finalizar?</h5>
          <a class="close-custom" data-dismiss="modal" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
              <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg></span></a>
            <!-----------------------ICONO DE RETROCEDER Y AVANZAR DE PREGUNTA------------------------>
      </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-smile" viewBox="0 0 16 16">
          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
          <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
        </svg>
        <!-----------------------MENSAJE DE FINALIZADO EL EXAMEN------------------------->
      <div class="modal-body text-center">
         Ten en cuenta de haber completado el examen.
          <input type="hidden" name="id" value="73763">
          <input type="hidden" name="_token" value="jfzvZOYgxi8XdZa1MXKsSKYlwdkZBG8vjObPx6JH">
          <div class="pt-4">
              <button type="submit" form="delete_activity_form" class="btn btn-custom-rojo btn-custom-fluid">Finalizar</button>
          </div>
      </div>
  </form>
</div>
</div>

<script src="{{ asset("js/core.js") }}" type="text/javascript"></script> 
<script src="{{ asset("js/admin.js") }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>