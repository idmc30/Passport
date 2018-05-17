<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Clientes</title>
</head>
<body>
	<form action="/oauth/clients" method="POST">
	 <p>
	 	<input type="text" name="name">
	 </p>
	 <p>
	 	<input type="text" name="redirect">
	 </p>
	   <input type="button" name="send" value="Enviar">
	 {{csrf_field()}}
	</form>
	
</body>
</html>