<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formularios (REQUEST)</title>
</head>
<body>
	<h1>Formularios (REQUEST)</h1>
	<hr>

	<form action="" method="post">
		<fieldset>
			<legend><h2>Datos Personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="Nombre Completo" value="<?php if (isset($REQUEST['nombre']))echo $REQUEST['nombre'];?>">
			</div>
			<div>
				<input type="text" name="email" placeholder="Correo Electronico" value="<?php if (isset($REQUEST['email']))echo $REQUEST['email'];?>">
			</div>
			<div>
				<input type="number" name="telefono" placeholder="Numero Telefonico" value="<?php if (isset($REQUEST['telefono']))echo $REQUEST['telefono'];?>">
			</div>
			<div>
				<input type="submit" value="Enviar">
			</div>
		</fieldset>
		</form>
		<ul>
			<?php  
			if ($POST) {
				  $errores = 0;
				  foreach ($POST as $key => $value) {
				  		if (!$value) 
				  			 $errores++;
				  		
				  }
				  if ($errores == 0); 

				  	//var_dump($POST);
					$nombre = $REQUEST['nombre'];
					$email = $REQUEST['email'];
					$telefono = $REQUEST['telefono'];
					
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
