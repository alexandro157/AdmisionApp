@extends('Admin.index')

@section('area')

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Areas</h1>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area</title>
    <link rel="stylesheet" href="{{ asset('css/area.css') }}">
</head>
<body>
    
    <!--Botones-->
    <div id="but1">
        <button type="button" class="mt-5 mx-4 btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal" >Nuevo ✚</button>
    </div>

    <!--Inicio modal 1-->
    <div class="modal" tabindex="-1" id="miModal">
        <div class="modal-dialog modal-xg">
            <div class="modal-content" id="are">

                <div class="modal-header">
                    <h5 class="modal-title">Nueva area</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <!--Input para el area-->
                    <label for="exampleFormControlTextarea1" class="form-label ">Area</label><br><br>
                    <input class="controls" type="text" name="p9" id="link" placeholder="Ingresar el Area"><br><br>

                    <!--Boton-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg">Guardar</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--Final modal 1-->


    <br><br>
    
    
    
    <br><h1 class="h3 mx-4 text-gray-800">Areas</h1>

    <!--Tabla-->

    <div class="container mt-2 position-relative">
        <div class="row">
          <div class="col">                
            <table class="table table-dark" id="are_table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Area</th>
                  <th>Editar</th>
                  <th>Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Ingenieria</td>
                  <td><button class="btn btn-warning">Editar</button></td>
                  <td><button type="button" class="btn btn-danger m-btn m-btn--custom" id="m_sweetalert_demo_3_1">Eliminar</button></td>
                </tr>


                <tr>
                  <td>2</td>
                  <td>Ciencias Sociales</td>
                  <td><button class="btn btn-warning">Editar</button></td>
                  <td><button type="button" class="btn btn-danger m-btn m-btn--custom" id="m_sweetalert_demo_3_2">Eliminar</button></td>
                </tr>


                <tr>
                  <td>3</td>
                  <td>Ciencias y Tecnología</td>
                  <td><button class="btn btn-warning">Editar</button></td>
                  <td><button type="button" class="btn btn-danger m-btn m-btn--custom" id="m_sweetalert_demo_3_3">Eliminar</button></td>
                </tr>

            
              </tbody>
            </table>
          </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

@endsection