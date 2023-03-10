<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pago</title>
    <link rel="stylesheet" href="{{ asset("css/estilos.css") }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/stilo-2.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style3.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style-modal.css") }}">
</head>
<body>
    
    <nav class="nav navbar-fixed-top" id="menu" >
        <ul class="list bg-primary text-white" >

            <div class="col-4" id="logo">               
                <a href="{{ url("/") }}"><img src="https://new.simbox.edu.pe/storage/public/configweb/m3c9n6uzpnwvPm1TJ1JnAk0oXEB8m46rS3KcECIn.png" alt="SimBox" class="logo" id="logo"></a>
            </div>

            <div id="list_1">
                <a id="b1" class="btn btn-warning" href="{{ url("") }}">vuelvete premiun</a><br><br><br><br>
            </div>

            <li class="list__item">
                <div class="list__button">
                    <img src="{{ asset("img/regresar.svg") }}" class="list__img">
                    <a href="{{ url("#") }}" class="nav__link">Regresar</a>
                </div>
            </li>

            <li class="list__item">
                <div class="list__button">
                    <img src="{{ asset("img/actualizar-datos.svg") }}" class="list__img">
                    <a href="{{ url("#") }}" class="nav__link">Actualizar datos</a>
                </div>
            </li>


            <li class="list__item">
                <div class="list__button">
                    <img src="{{ asset("img/agregar-licencia.svg") }}" class="list__img">
                    <a href="{{ url("#") }}" class="nav__link">Agregar licencia</a>
                </div>
            </li>

            <li class="list__item">
                <div class="list__button">
                    <img src="{{ asset("img/cambiar-contraseña.svg") }}" class="list__img">
                    <a href="{{ url("#") }}" class="nav__link">Cambiar contraseña</a>
                </div>
            </li>

            <li class="list__item">
                <div class="list__button">
                    <img src="{{ asset("img/pagos.svg") }}" class="list__img">
                    <a href="{{ url("#") }}" class="nav__link">Pagos</a>
                </div>
            </li>


            <li class="list__item" >
                <div class="list__button" >
                    <img src="{{ asset("img/realizar-pago.svg") }}" class="list__img">
                    <a href="{{ url("#") }}" class="nav__link" >Realizar pago</a>
                </div>
            </li>

        </ul>   
    </nav>

    <script src="{{ asset("/main.js") }}"></script> 

    <div class="py-4 px-md-5" id="interior">
        <h5 class="montserrat-500 text-uppercase text-primary">Adquirir un plan</h5>
        <p class="small text-secondary"> Selecciona uno de nuestros planes y obtén el código CIP de Pago Efectivo para que puedas cancelar en agentes, bancos o transferencia bancaria.</p>
        <br>
        
        <div class="row">
            <div class="col-6" style="padding-top: 0.4rem;">
                Si tienes un código promocional agrégalo aquí:
            </div>
            <div class="col-6">
                <input type="text" name="cupon" id="cupon-info" data-url="https://preu.simbox.edu.pe/cupon/checked" class="form-control" value="">
            </div>
            <input type="hidden" name="payment_id">
        </div>

        

        <!--Tarjetas-->
        <div id="tabla-precios" class="tabla">
            <p class="small text-secondary">*Selecciona los planes que desea.</p>
            <br>
            <div class="precio-col" >
                <div class="precio-col-header">
                <h3>S/.10.00</h3>
                <p>1 MES</p>
                </div>
                
                <br>
                
                <div class="precio-col-comprar">
                    <br>
                    <input class="checkbox" type="checkbox" id="cbox2" value="second_checkbox" placeholder="seleccionar">
                    <br>
                    <br>
                </div>
            </div>
            <div class="precio-col">
                <div class="precio-col-header">
                <h3>S/.25.00</h3>
                <p>3 MESES</p>
                </div>
                
                <br>
                
                <div class="precio-col-comprar">
                    <br>
                    <input class="checkbox" type="checkbox" id="cbox2" value="second_checkbox" placeholder="seleccionar">
                    <br>
                    <br>
                </div>
            </div>
            <div class="precio-col">
                <div class="precio-col-header">
                <h3>S/.45.00</h3>
                <p>6 MESES</p>
                </div>
                
                <br>
                
                <div class="precio-col-comprar">
                    <br>
                    <input class="checkbox" type="checkbox" id="cbox2" value="second_checkbox" placeholder="seleccionar">
                    <br>
                    <br>
                </div>

            </div>
        </div>


        <!--Fin   Tarjetas-->

        <!--metodos de pago-->

        <h5 class="montserrat-500 text-uppercase text-primary">Metodos de pago</h5>
        <p class="small text-secondary">Elija la opción por el cual desea hacer su método de pago y seguidamente dele a la opción de realizar pago.</p>
     
        <br><br>

        <!--botones-->

        <img class="yape" id="yape_logo" src="{{ asset("img/yape_logo.png") }}" width="120" height="75" data-bs-toggle="modal" data-bs-target="#miModal1" type="button" >

        <img class="plin" id="plin_logo" src="{{ asset("img/plin_logo.jpg") }}" width="120" height="75" data-bs-toggle="modal" data-bs-target="#miModal2" type="button" >

        <img class="bcp" id="bcp_logo" src="{{ asset("img/bcp_logo.jpg") }}" width="120" height="75" data-bs-toggle="modal" data-bs-target="#miModal3" type="button" >

        <img class="bbva" id="bbva_logo" src="{{ asset("img/bbva_logo.jpg") }}" width="120" height="75" data-bs-toggle="modal" data-bs-target="#miModal4" type="button" >

        <!--modal 1-->

        <div class="modal" tabindex="-1" id="miModal1">
            <div class="modal-dialog modal-xg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Yape</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div id="div_1">
                            <select class="form-select" aria-label="Default select example" id="lista-modal">
                                <option selected>[Tipo de documento]</option>
                                <option value="1">DNI</option>
                                <option value="2">Carnet de Extranjería</option>
                                <option value="3">Pasapote</option>
                                <option value="4">RUT</option>

                            </select>

                        </div>

                        <div id="div_2">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Número de documento" >
                        </div>

                        <br><br><br>

                        <div>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Número de Celular">
                        </div>

                        <br><br>

                        <p>*No se hacen cambios ni devoluciones</p>
                        <p>*Toda la informacion de pago es segura</p>


                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#miModal1_2" data-bs-toggle="modal">Siguiente</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- modal 1 fin-->


        <!--modal 1.2 -->
        <div class="modal fade" id="miModal1_2" aria-hidden="true" aria-labelledby="miModal1_3" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="miModal1_3">Escaneo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    Para realizar el pago escane el codigo de barras. 
                    
                    <center><br>
                    <img src="{{ asset("img/yape.png") }}" alt="" width="220" height="300" id="yape">
                    </center><br>

                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#" data-bs-toggle="modal">Finalizar</button>
                    </div>
              </div>
            </div>
          </div>
        <!--modal 1.2 fin-->



        <!-- modal 2 -->

        <div class="modal" tabindex="-1" id="miModal2">
            <div class="modal-dialog modal-xg">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Plin</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <div id="div_1">
                            <select class="form-select" aria-label="Default select example" id="lista-modal">
                                <option selected>[Tipo de documento]</option>
                                <option value="1">DNI</option>
                                <option value="2">Carnet de Extranjería</option>
                                <option value="3">Pasapote</option>
                                <option value="4">RUT</option>

                            </select>

                        </div>

                        <div id="div_2">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Número de documento" >
                        </div>

                        <br><br><br>

                        <div>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Número de Celular">
                        </div>

                        <br><br>

                        <p>*No se hacen cambios ni devoluciones</p>
                        <p>*Toda la informacion de pago es segura</p>


                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" data-bs-target="#miModal2_2" data-bs-toggle="modal">Siguiente</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- modal 2 fin-->
        
        

        <!--modal 2.2 -->
        <div class="modal fade" id="miModal2_2" aria-hidden="true" aria-labelledby="miModal2_3" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="miModal2_3">Escaneo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    Para realizar el pago escane el codigo de barras. 
                    
                    <center><br>
                    <img src="{{ asset("img/plin.png") }}" alt="" width="220" height="300" id="plin">
                    </center><br>

                    </div>
                    <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#" data-bs-toggle="modal">Finalizar</button>
                    </div>
              </div>
            </div>
          </div>
        <!--modal 2.2 fin-->



        <!-- modal 3 -->
        
        <div class="modal" tabindex="-1" id="miModal3">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">BCP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <table class="table table-dark table-striped" style="font-size: 0.8em;">
                            <thead>
                                <tr>
                                    <th>BANCO</th>
                                    <th>NUMERO DE CUENTA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BCP BANCO DE CRÉDITO DEL PERÚ</td>
                                    <td>Nro cuenta soles: 0021-0244-0100045760 CCI: 0-15-000100045760-04</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- modal 3 fin -->



        <!-- modal 4-->

        <div class="modal" tabindex="-1" id="miModal4">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">BBVA</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">

                        <table class="table table-dark table-striped" style="font-size: 0.8em;">
                            <thead>
                                <tr>
                                    <th>BANCO</th>
                                    <th>NUMERO DE CUENTA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>BBVA BANCO CONTINENTAL</td>
                                    <td>Nro cuenta soles: 0011-0145-0100045760 CCI: 011-145-000100045760-04</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <!-- modal 4 fin-->

        <!-- fin-->

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>