@extends('Admin.index')

@section('menubar')

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>menubar</title>

        <!---===para llamar a estilo de menu bar-->
        <link href="{{ asset("css/body.css") }}" rel="stylesheet">

  </head>

  <body class="d-flex h-100 text-center text-bg-dark" >
    
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" id="div_1">

      <header class="mb-auto">
        <div>
          <h3 class="float-md-start mb-0">Menu</h3>
          <nav class="nav nav-masthead justify-content-center float-md-end">
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="{{ url("#") }}">Home</a>
            <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="{{ url("#") }}">admin</a>
          </nav>
        </div>
      </header>

        <main class="px-3">
          <h1>Nosotros</h1>
          <p class="lead">A los alumnos egresados del nivel secundario, 
            interesados en lograr una vacante en la Universidad Nacional 
            del Centro del Perú, a través de los exámenes regulares u ordinarios de admisión.</p>
          <p class="lead">
            <button type="button" class="btn btn-lg btn-light fw-bold border-white bg-white" class="nav-item"><a href="{{ url("usuario.html") }}" class="nav-link px-2 text-muted" >Usuario</a></button>
            <button type="button" class="btn btn-lg btn-light fw-bold border-white bg-white" class="nav-item"><a href="{{ url("suscripcion.html") }}" class="nav-link px-2 text-muted" >Suscripcion</a></button>
            <button type="button" class="btn btn-lg btn-light fw-bold border-white bg-white" class="nav-item"><a href="{{ url("examen.html") }}" class="nav-link px-2 text-muted" >Examen</a></button>
          </p>

        </main>

          <footer class="mt-auto text-dark-50">
            
          </footer>
</div>
</body>
</html>

@endsection