<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condicional SI</title>
</head>
<body>
	<h1>Condicional SI</h1>
	<hr>

	<?php 

		$ndia = date('w');

		if ($ndia == 3) {
			echo "Hoy es Miercoles, Feliz Clase de Desarrollo ";
		}

	 ?>
</body>
</html>