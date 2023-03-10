@extends('Admin.index')

@section('usuario')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>usuario</title>

    
    <link href="{{ asset("/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
    <link href="{{ asset("css/sidebars.css") }}" rel="stylesheet">


    <!--link para tabla-->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.dataTables.min.css">

  </head>

    <body>
       <!-- ======= Header ======= -->
    <header id="header">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1><a href="{{ url("index.html") }}">Menu<span>.</span></a></h1>
        </div>
      </div>
    </header><!-- End Header -->

      <main class="d-flex flex-nowrap">
        
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
          <div class="row">
            <div class="position-sticky pt-3 sidebar-sticky">
              <hr>
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                  <a href="{{ url("#") }}" class="nav-link active" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                  Usuario
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url("#") }}" class="nav-link active" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                  Suscripcion
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ url("#") }}" class="nav-link active" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                  Examen
                  </a>
                </li>
              </ul>
              <hr>
              <div class="dropdown">
                <a class="me-5">
                </a>
              </div>
            </div>
         
          </div>
       
        </div>

        <!---===-->
        <!---===-->



                        <!-----===========la tabla comienza=========-->

            <div class="b-example-divider b-example-vr"></div>
              <div class="container">
                <div class="container">
                  <div class="table_header">
                    <h2>Usuario</h2>
          
                <table id="example" class="display" style="width:100%">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Usuario</th>
                          <th>Correo</th>
                          <th>Nombre y Apellido</th>
                          <th>Telefono</th>
                          <th>Opciones</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>1</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-warning">Pendiente</button>
                          </td>
                      </tr>
                      <tr>
                          <td>2</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-danger">Falta sucribir</button>
                          </td>
                      </tr>
                      <tr>
                          <td>3</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-warning">Pendiente</button>
                          </td>
                      </tr>
                      <tr>
                          <td>4</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-success">Suscrito</button>
                          </td>
                      </tr>
                      <tr>
                          <td>5</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-success">Suscrito</button>
                          </td>
                      </tr>
                      <tr>
                          <td>6</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-warning">Pendiente</button>
                          </td>
                      </tr>
                      <tr>
                          <td>7</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-success">Suscrito</button>
                          </td>
                      </tr>
                      <tr>
                          <td>8</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-warning">Pendiente</button>
                          </td>
                      </tr>
                      <tr>
                          <td>9</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-danger">Falta sucribir</button>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-danger">Falta sucribir</button>
                          </td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-danger">Falta sucribir</button>
                          </td>
                        </tr>
                        <tr>
                          <td>12</td>
                          <td>Juana23</td>
                          <td>torresjuana@gmail.com</td>
                          <td>Juana</td>
                          <td>999999123</td>
                          <td>
                          <i class="bi bi-trash" id="icons"></i>
                          <button type="button" class="btn btn-outline-success">Suscrito</button>
                          </td>
                        </tr>
                  </tbody>
                </table>  
  
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
   <script src="{{ asset("js/usuario.js") }}"></script>


                 <!-----===========fin de la tabla =========-->
      </main>

     
    </body>
</html>

@endsection