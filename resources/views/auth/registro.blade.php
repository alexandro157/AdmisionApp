<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/registro.css')}}">
   
    <title>Registro</title>
</head>

<body class="p-4 m-2 border-0 bd-example">
  <div class="container">
    <form class="formulario">
     
      <div class="card" tyle="width: 19rem;">
        <div class="card-body">  
          <img class="img-fluid" id="imagen" src="{{asset('img/study.png') }}" alt=""> 
      <h1 style="color: rgb(0, 0, 0); font: size 6px;">Registro</h1>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" style="color: rgb(0, 0, 0); font: size 6px;">Usuario</label>
          <input type="name" class="form-control" id="name" name="name" aria-describedby="userhelp"  placeholder="Ingrese Usuario">
          <div id="userHelp" class="form-text"></div>
        </div>

        @error('name')        
          <p class="border border-red-500 rounded-md bg-red-100 w-full
          text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="color: rgb(0, 0, 0); font: size 6px;">Correo</label>
            <input type="email"  id="email" name="email" class="form-control"  placeholder="Correo">
        </div>

        @error('email')        
          <p class="border border-red-500 rounded-md bg-red-100 w-full
          text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="color: rgb(0, 0, 0); font: size 6px;">Contraseña</label>
          <input type="password" class="form-control"  id="password" name="password" placeholder="Ingrese Contraseña">
        </div>

        @error('password')        
          <p class="border border-red-500 rounded-md bg-red-100 w-full
          text-red-600 p-2 my-2">* {{ $message }}</p>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" style="color: #000000; font: size 6px;">Repetir Contraseña</label>
            <input type="password" class="form-control" placeholder="Password" id="password_confirmation" name="password_confirmation">
        </div>    
          
          <button type="submit" class="btn btn-primary btn-block">Registrar</button>
      
        </div>
      
      </form>
    </div>
</body>
</html>