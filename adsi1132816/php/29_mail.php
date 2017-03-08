<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Enviar Correo Electronico</title>
</head>
<body>
	<h1>Enviar Correo Electronico</h1>
	<hr>

	<form method="post" action="mail.php">
		<strong>Correo:</strong><input type="text" name="email"><br>
		<strong>Asunto:</strong><input type="text" name="asunto"><br>
		<strong>Mensaje:</strong><textarea name="mensaje"></textarea><br>
		<input type= "submit" value="Enviar">
	</form>
    
   <?php 

   		if ($_POST) {
   			$email = $_POST["email"];
   			$Asunto = $_POST["Asunto"];
   			$mensaje = $_POST["mensaje"];
             
            mail("pyrios0@misena.edu.co", "Asunto: $asunto, $mensaje, De: $email");
            echo "Gracias, el Correo fue enviado.";

   		}

    ?>

</body>
</html>