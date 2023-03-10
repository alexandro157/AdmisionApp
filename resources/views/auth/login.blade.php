<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css')}}">
    <title>Login</title>
</head>
<body>
  <div class="container">
    <form class="formulario">      
      <div class="card" style="width: 20rem;">
        <div class="card-body">
        <img class="img-fluid" id="imagen" src="{{asset('img/study.png') }}" alt="">
      <h1 style="color: rgb(0, 0, 0); font: size 6px;">Login</h1>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" style="color: rgb(0, 0, 0); font: size 6px;">Usuario</label>
          <input type="name" class="form-control" id="name" name="name" aria-describedby="userhelp"  placeholder="Ingrese Usuario">
          <div id="userHelp" class="form-text"></div>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="color: rgb(0, 0, 0); font: size 6px;">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese Contraseña">
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1" style="color: rgb(0, 0, 0); font: size 6px;">¿Olvidaste Contraseña?</label>
        </div>

        <a href="{{ route('login') }}" >
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </a>
        <a  href="{{ url("Registro") }}" class="link">Registrarse</a></div></div>
     
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
      </form> 
    </div>
</body>
</div>
</html>