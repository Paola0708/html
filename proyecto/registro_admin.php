<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" href="css/registro.css">
</head>
<body>
	<a href="proyecto.html">Atras</a>
	<form id="democ1" method="get" action="registro.php">
		<h1>REGISTRO</h1>
		<input  required class="user1" name="name" type="text" maxlength="20" placeholder="Nombre(s)" >
		<input type="text" maxlength="20" name="last_name" placeholder="Apellido(s)" requerid>
		<input type="date" placeholder="date" name="date" requerid>
		<input type="document" maxlength="10" name="document" placeholder="document" requerid>
		<input type="text"  maxlength="10" name="cellphone" placeholder="cellphone" requerid>
		<input type="text" maxlength="50" name="address" placeholder="address" requerid>
		<select name="city" id="s" requerid>
			<option value="">cuidad</option>
			<option value="Amenia">Armenia</option>
			<option value="Barranquilla">Barranquilla</option>
			<option value="Bogota">Bogota</option>
			<option value="Bucaramanga">Bucaramanga</option>
			<option value="Cali">Cali</option>
			<option value="Cartagena">Cartagena</option>
			<option value="Cucuta">Cucuta</option>
			<option value="Florencia">Florencia</option>
			<option value="Ibague">Ibague</option>
			<option value="Quibd">Quibdo</option>
			<option value="Manizales">Manizales</option>
			<option value="Medellin">Medellin</option>
			<option value="Montaria">Montaria</option>
			<option value="Neiva">Neiva</option>
			<option value="Pasto">Pasto</option>
			<option value="Pereira">Pereira</option>
			<option value="Popayan">Popayan</option>
			<option value="Riohacha">Riohacha</option>
			<option value="Santa Marta">Santa Marta</option>
			<option value="Sincelejo">Sincelejo</option>
			<option value="Tunja">Tunja</option>
			<option value="Valledupar">Valledupar</option>
			<option value="Villavicencio">Villavicencio</option>
		</select>
		<input type="email" name="email" maxlength="150" placeholder="Correo Electronico" requerid>
		<input class="candado1" name="password" type="password" maxlength="16" placeholder="Contraseña" requerid>
		<input class="candado1" name="pass" type="password" maxlength="16" placeholder="Confirmar Contraseña" requerid>
		<button class="form" type="submit">Registar</button>
	</form>
	<form id="democ" method="post">
    	<h1>LOGIN</h1>
     	<input class="user" type="text" maxlength="20" placeholder="Nombre de usuario" requerid>
     	<input class="candado" type="password" maxlength="16" placeholder="Contraseña" requerid>
     	<button class="form" type="submit">Login</button> 
     	<a href="#democ4">Olvide mi contraseña</a> 	 
	</form>
	<form id="democ5">
		<h1>Nueva Contraseña</h1>
		<input class="co" type="password" maxlength="16" placeholder="Ingrese contraseña nueva" requerid>
		<input class="co" type="password" maxlength="16" placeholder="Confirmar contraseña" requerid>
		<button class="re" type="submit">Aceptar</button>
	</form>
	<form id="democ4">
		<h1>Restablecer Contraseña</h1>
		<input class="r" type="email" maxlength="150" placeholder="Ingrese su email" requerid>
		<input class="r" type="text" maxlength="6" placeholder="Ingrese su codigo" requerid>
		<button class="en" type="submit">
			<a href="#democ5">Enviar</a>
		</button>


	

</body>
</html>