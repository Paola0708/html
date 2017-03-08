<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo DO WHILE</title>
</head>
<body>
	<h1>Ciclo DO WHILE</h1>
	<hr>

	<?php 

		//Imprimir los numeros del 0 al 100 de la 
		// Siguiente forma: 3, 6, 9...
		$i = 3;
		do {
 		  echo "<p>".$i."</p>";
 		   $i=$i+3;
		} while ($i < 100);
	 ?>
</body>
</html>