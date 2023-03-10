@extends('Admin.index')

@section('model')

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Modal</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<!-- Template Main CSS File -->
	<link href="{{ asset("css/style-modal.css") }}" rel="stylesheet">   

</head>

<body>

	<!-----================================-->
	<div class="py-1 px-md-4">
	<section class="form-register">
		<h4>Registrar carrera</h4>
		<input class="controls" type="text" name="nombres" id="nombres" placeholder="Ingrese su Carrera">
		<input id="but" class="botons" type="submit" value="Examen">
		<input id="but" class="botons" type="submit" value="Corregir">
	</section>
	</div>
	  <br>

	<!-----================================-->
	<script src="{{ asset("js/modal.js") }}"></script>
</body>
</html>

@endsection