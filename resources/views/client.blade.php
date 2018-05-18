<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
</head>
<body>
	<form action="/oauth/clients" method="POST">
	 <p>
	 	<label for="usuario">Usuario</label>
	 	<input type="text" name="name">
	 </p>
	 <p>
	 	<label for="redirecionar">Redirect</label>
	 	<input type="text" name="redirect">
	 </p>
	   <input type="submit" name="send" value="Enviar">
	 {{csrf_field()}}
	</form>

	<br>
	{{$clients}}
	
</body>
</html>