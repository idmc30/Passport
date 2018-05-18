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


	<table border="3px">
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Redirect</td>
			<td>Secret</td>
		</tr>
			@foreach($clients as $client)
			<tr>
			   <td>{{$client->user_id}}</td>
			   <td>{{$client->name}}</td>
			   <td>{{$client->redirect}}</td>
			   <td>{{$client->secret}}</td>	
			</tr>
             

			@endforeach
		
	</table>
	
</body>
</html>