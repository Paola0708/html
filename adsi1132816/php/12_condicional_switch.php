<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional Switch</title>
</head>
<body>
	<h1>Condicional Switch</h1>
	<hr>

	<?php 

		$ndia = date('w');

		switch ($ndia) {
			case 1: 
				echo "Hoy es lunes";
				break;
			case 2: 
				echo "Hoy es Martes";
				break;
			case 3: 
				echo "Hoy es Miercoles";
				break;
			case 4: 
				echo "Hoy es Jueves";
				break;
			case 5: 
				echo "Hoy es Viernes";
				break;
			default:
				echo "Feliz fin de semana";
				break;
		}

	 ?>
</body>
</html>