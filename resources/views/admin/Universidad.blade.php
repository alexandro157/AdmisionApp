@extends('Admin.index')

@section('universidad')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Universidad</h1>

</div>
<!-- /.container-fluid -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universidad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
</head>



<body>

    <!--Botones-->
    
    <div class="container-fluid">
        <a class="btn btn-primary btn-lg active" aria-current="page" href="{{asset('/Area')}}">Area</a>
        <a class="btn btn-primary btn-lg active" aria-current="page" href="{{asset('/Carrera')}}">Carrera</a>
        <a class="btn btn-primary btn-lg active" aria-current="page" href="{{asset('/RegistroExamen')}}">Examen</a>
    </div>


    <!--Inicio modal 1-->
    <div class="modal" tabindex="-1" id="miModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">


                <div class="modal-header">
                    <h5 class="modal-title">Universidad</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                </div>
                

            </div>
        </div>
    </div>
    <!--Final modal 1-->


    <!--Inicio modal 2-->
    <div class="modal" tabindex="-1" id="miModal2">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">


                <div class="modal-header">
                    <h5 class="modal-title">Nueva area</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <section class="form-register">
                        <input class="controls" type="text" name="nombres" id="ing_area" placeholder="Ingrese el area">

                        <h4>Registrar carrera</h4>
                        <input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Carrera">
                        <input id="but" class="botons" type="submit" value="Examen">
                        <input id="but" class="botons" type="submit" value="Corregir">
                    </section>

                </div>


            </div>
        </div>
    </div>
    <!--Final modal 2-->


    <!--Inicio modal 3-->
    <div class="modal" tabindex="-1" id="miModal3">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">


                <div class="modal-header">
                    <h5 class="modal-title">Seleccionar carrera</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                </div>


            </div>
        </div>
    </div>
    <!--Final modal 3-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
@endsection