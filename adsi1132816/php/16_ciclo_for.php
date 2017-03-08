<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ciclo FOR</title>
	<style>
		div{
			height: 20px;
			margin-bottom: 4px;
			padding: 4;
			width: 120px;
		}
	</style>
</head>
<body>
	<h1>Ciclo FOR</h1>
	<hr>

	<?php 

		//Imprimir 100 los colores del rojo hasta el negro  
		
		for ($i=100; $i >= 0 ; $i--) { 
			echo "<div style='background-color: rgb(".$i."%,0%,0%)'></div>";
		}
	 ?>
</body>
</html>
