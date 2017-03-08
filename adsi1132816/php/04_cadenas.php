<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadenas PHP</title>
</head>
<body>
	<h1>Cadenas PHP</h1>
	<hr>
	<?php 

		$cadena1 = 'ADSI 1132816';
		$canena2 = "Hola Mundo $cadena1";

		$canena3 = 'Centro de Procesos Indistriales';
		$canena4 = 'SENA Regional Caldas';
		$canenar = $canena3.''.$canena4;

	 ?>

	 <h2><?=$canena2?></h2>
	 <hr>
	 <h3>La Cadena: <?=$canenar?> tiene <?echo strlen($cadenar)?> Caracteres</h3>
	 <h3>La Palabra Procesos en la cadena: <?=$canenar?> esta en la posicion <?echo strlen ($cadenar, 
	 'procesos')?></h3>
</body>
</html>