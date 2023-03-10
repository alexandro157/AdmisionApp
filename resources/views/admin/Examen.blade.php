@extends('Admin.index')

@section('regitroexamen')

<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800">Examen</h1>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/examen_1.css') }}">


</head>
<body>

    <!--Botones-->
    <div id="but1">
        <button type="button" class="mt-5 mx-4 btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal" >Nuevo ✚</button>
    </div>

    <!--Inicio modal 1-->
    <div class="modal" tabindex="-1" id="miModal">
        <div class="modal-dialog modal-xg">
            <div class="modal-content" id="exa">

                <div class="modal-header">
                    <h5 class="modal-title">Nuevo examen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <!--Input para el area-->
                    <label for="exampleFormControlTextarea1" class="form-label ">Año</label><br><br>
                    <input class="controls" type="text" name="p9" id="link" placeholder="Ingresar el año"><br><br>

                    <!--Boton-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-lg">Guardar</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--Final modal 1-->
   


    <br>


    <!--Tarjetas-->
    
    <div class="container-card">
        <div class="card">
        <figure>
            <img src="https://uneg.edu.mx/wp-content/uploads/2021/10/8.-Conceptos-y-definiciones-de-administracio%CC%81n-1-scaled.jpg">
        </figure>
        <div class="contenido-card">
            <h3>2021 - I</h3>
            <a href="http://127.0.0.1:8000/Bloque">Examen</a>
        </div>
        </div>
        <div class="card">
        <figure>
            <img src="https://uneg.edu.mx/wp-content/uploads/2021/10/8.-Conceptos-y-definiciones-de-administracio%CC%81n-1-scaled.jpg">
        </figure>
        <div class="contenido-card">
            <h3>2022 - I</h3>
            <a href="http://127.0.0.1:8000/Bloque">Examen</a>
        </div>
        </div>
        <div class="card">
        <figure>
            <img src="https://uneg.edu.mx/wp-content/uploads/2021/10/8.-Conceptos-y-definiciones-de-administracio%CC%81n-1-scaled.jpg">
        </figure>
        <div class="contenido-card">
            <h3>2023 - I</h3>
            <a href="http://127.0.0.1:8000/Bloque">Examen</a>
        </div>
        </div>
    </div>
    <!--Fin   Tarjetas-->

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>

@endsection