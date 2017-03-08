<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios (GET)</title>
</head>
<body>
	<h1>Formularios (GET)</h1>
	<hr>

	<form action="" method="get">
		<fieldset>
			<legend><h2>Datos Personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="Nombre Completo" value="<?php if (isset($_GET['nombre']))echo "$_GET['nombre']";?>">
			</div>
			<div>
				<input type="text" name="email" placeholder="Correo Electronico" value="<?php if (isset($_GET['email']))echo "$_GET['email']";?>" >
			</div>
			<div>
				<input type="number" name="telefono" placeholder="Numero Telefonico" value="<?php if (isset($_GET['telefono']))echo "$_GET['telefono']";?>">
			</div>
			<div>
				<input type="submit" value="Enviar">
			</div>
		</fieldset>
		</form>
		<ul>
			<?php  
			if ($_GET) {
				  $errores = 0;
				  foreach ($_GET as $key => $value) {
				  		if (!$value) 
				  			 $errores++;
				  		
				  }
				  if ($errores == 0) 
				  
					//var_dump($GET);
					$nombre = $_GET['nombre'];
					$email = $_GET['email'];
					$telefono = $_GET['telefono'];
					
					echo "<li>Nombre: ".$nombre."</li>";
					echo "<li>Email: ".$email."</li>";
					echo "<li>Telefono: ".$telefono."</li>";
				} else{
					echo "<li>Debe llena todos los campos!</li>";
				}
				  
				   
			?>
		</ul>
		<hr>
		
</body>
</html>
