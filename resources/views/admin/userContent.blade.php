
@extends('Admin.index')

@section('Usuarios')



<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Lista de Usuarios</h1>

</div>
<!-- /.container-fluid -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admision</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset("btn.css") }}" rel="stylesheet">
   
</head>

  <body>

    <div id="but1">
        <button type="button" class="mt-5 mx-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal" >Crear universidad</button>
    </div>
    <div id="but2">
        <button type="button" class="mt-5 mx-5 btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal2" >Crear pregunta</button>
    </div>
    
    <!--Inicio modal 1-->
    <div class="modal" tabindex="-1" id="miModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Crear universidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <br>

                <!--Inputs-->
                <div class="modal-body">
                    <input class="controls" type="text" name="i1" id="inp" placeholder="Nombre de la universidad" size="39">
                    <input class="controls" type="text" name="i1" id="inp" placeholder="Area" size="39">
                    <input class="controls" type="text" name="i1" id="inp" placeholder="Año" size="39">
                    <button type="button" class="btn btn-dark" id="bt">Guardar</button>
                </div>
                <!---->

                <!--Tabla-->

                <div class="container mt-5 position-relative">
                    <div class="row">
                      <div class="col">
                        
                        <table class="table table-dark" id="table">
                          <thead>
                            <tr>
                              <th>Id</th>
                              <th>Nombre de universidad</th>
                              <th>Area</th>
                              <th>Año</th>
                              <th>Editar</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>Universidad autonoma del peru</td>
                              <td>Economia</td>
                              <td>2022</td>
                              <td><button class="btn btn-warning">Edit</button></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Universidad de lima</td>
                              <td>Contabilidad</td>
                              <td>2022</td>
                              <td><button class="btn btn-warning">Edit</button></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Universidad tecnologica del peru</td>
                              <td>Ingeniería Industrial</td>
                              <td>2023</td>
                              <td><button class="btn btn-warning">Edit</button></td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>

                <!---->

                <br>
                <br>

            </div>
        </div>
    </div>
    <!--Final modal 1-->

    <!--Inicio modal 2-->
    <div class="modal" tabindex="-1" id="miModal2" >
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Crear pregunta</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
              <!--Universidades-->
              <div id="div_1">
                <select class="form-select" aria-label="Default select example" id="select_1">
                    <option selected>[Universidades]</option>
                    <option value="1">Universidad Nacional Mayor de San Marcos</option>
                    <option value="2">Universidad de Lima</option>
                    <option value="3">Universidad Peruana Cayetano Heredia</option>
                    <option value="4">Universidad Nacional de Ingeniería</option>
                    <option value="5">Uiversidad Nacional Agraria La Molina</option>
                    <option value="6">Universidad Nacional San Antonio de Abad en Cusco</option>
                    <option value="7">Universidad Peruana de Ciencias Aplicadas</option>
                    <option value="8">Pontificia Universidad Católica del Perú</option>
                    <option value="9">Universidad Científica del Sur</option>
                    <option value="10">Universidad Nacional de la Amazonía Peruana</option>
                </select>
              </div>

              <!--area-->
              <div id="div_1">
                <select class="form-select" aria-label="Default select example" id="select_1">
                    <option selected>[Area]</option>
                    <option value="1">Ingeniería Civil</option>
                    <option value="2">Economia</option>
                    <option value="3">Ingeniería Ambiental</option>
                    <option value="4">Arquitectura</option>
                    <option value="5">Medicina</option>
                    <option value="6">Geología</option>
                    <option value="7"> Ingeniería de Sistemas</option>
                    <option value="8">Ingeniería Industrial</option>
                    <option value="9">Contabilidad</option>
                    <option value="10">Ciencias Politicas</option>
                </select>
              </div>

              <!--Año-->
              <div id="div_1">
                <select class="form-select" aria-label="Default select example" id="select_1">
                    <option selected>[Año]</option>
                    <option value="1">2021 - I</option>
                    <option value="2">2021 - II</option>
                    <option value="3">2022 - I</option>
                    <option value="4">2022 - II</option>
                    <option value="5">2023 - I</option>
                    <option value="6">2023 - II</option>
                </select>
              </div>


              <!--Curso-->
              <div id="div_1">
                <select class="form-select" aria-label="Default select example" id="select_1">
                    <option selected>[Curso]</option>
                    <option value="1">Física</option>
                    <option value="2">Geometría</option>
                    <option value="3">Razonamiento matemático</option>
                    <option value="4">Razonamiento verbal </option>
                    <option value="5">Aritmética</option>
                    <option value="6">Química</option>
                </select>
              </div><br><br><br>
              
              <hr size="2px" color="black" /><br>

              <!--Cuadro de pregunta-->

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Ingrese Pregunta</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
              </div>

              <!--Input para link-->
              <label for="exampleFormControlTextarea1" class="form-label">Ingresar el link</label><br>
              <input class="controls" type="text" name="p9" id="link" placeholder="Pegar el link" >

              <!--Seleccionar Imagen -->
              <div class="mb-3">
                <label for="formFile" class="form-label">Subir la Respuesta</label>
                <input class="form-control" type="file" id="formFile">
              </div>

              <!--Alternativas-->

              <section class="form-register">
                <label for="exampleFormControlTextarea1" class="form-label">Ingrese las alternativas</label><br>
                    <input class="controls" type="text" name="p1" id="pre_1" placeholder="Ingrese la primera alternativa" >
                    
                        <div id="div_2">
                            <select class="form-select" aria-label="Default select example" id="select_2">
                                <option selected>[Alternativa]</option>
                                <option value="1">Correcto</option>
                                <option value="2">Incorrecto</option>
                            </select>
                        </div>
                    
                    <br>

              </section>

              <section class="form-register">
                <br>
                <label for="exampleFormControlTextarea1" class="form-label"></label><br>
                    <input class="controls" type="text" name="p1" id="pre_1" placeholder="Ingrese la seguna alternativa" >
                    
                        <div id="div_2">
                            <select class="form-select" aria-label="Default select example" id="select_2">
                                <option selected>[Alternativa]</option>
                                <option value="1">Correcto</option>
                                <option value="2">Incorrecto</option>
                            </select>
                        </div>
                    <br>
              </section>

              <section class="form-register">
                <br>
                <label for="exampleFormControlTextarea1" class="form-label"></label><br>
                    <input class="controls" type="text" name="p1" id="pre_1" placeholder="Ingrese la tercera alternativa" >
                    
                        <div id="div_2">
                            <select class="form-select" aria-label="Default select example" id="select_2">
                                <option selected>[Alternativa]</option>
                                <option value="1">Correcto</option>
                                <option value="2">Incorrecto</option>
                            </select>
                        </div>
                    <br>
              </section>

              <section class="form-register">
                <br>
                <label for="exampleFormControlTextarea1" class="form-label"></label><br>
                    <input class="controls" type="text" name="p1" id="pre_1" placeholder="Ingrese la cuarta alternativa" >
                    
                        <div id="div_2">
                            <select class="form-select" aria-label="Default select example" id="select_2">
                                <option selected>[Alternativa]</option>
                                <option value="1">Correcto</option>
                                <option value="2">Incorrecto</option>
                            </select>
                        </div>
                    <br>
              </section>

              <section class="form-register">
                <br>
                <label for="exampleFormControlTextarea1" class="form-label"></label><br>
                    <input class="controls" type="text" name="p1" id="pre_1" placeholder="Ingrese la quinta alternativa" >
                    
                        <div id="div_2">
                            <select class="form-select" aria-label="Default select example" id="select_2">
                                <option selected>[Alternativa]</option>
                                <option value="1">Correcto</option>
                                <option value="2">Incorrecto</option>
                            </select>
                        </div>
                    <br>
              </section>
              <br>

              <!--Alternativas (fin)-->
              <br>
              <br>
              

            <div class="modal-footer">
              <button type="button" class="btn btn-primary btn-lg">Guardar</button>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

  
@endsection
