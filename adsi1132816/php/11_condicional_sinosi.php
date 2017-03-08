<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional SINO</title>
</head>
<body>
	<h1>Condicional SINO</h1>
	<hr>

	<?php 

		$ndia = date('w');

		if ($ndia == 1) {
			echo "Hoy es Lunes";

		}elseif ($ndia == 2){
			echo "hoy es Martes";
		}elseif ($ndia == 3){
			echo "hoy es Miercoles";	
		}
		elseif ($ndia == 4){
			echo "hoy es Jueves";
		}
		elseif ($ndia == 5){
			echo "hoy es Viernes";
		}

		}else{
			echo "Feliz fin de semana";
		}

	 ?>
</body>
</html>