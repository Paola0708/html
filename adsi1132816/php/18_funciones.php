<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funciones</title>
</head>
<body>
	<h1>funciones</h1>
	<hr>

	<?php 

		// Funcion sin parametros
		function saludo(){
			echo "<h2> Hola Mundo ADSI  </h2>";
		}
		saludo();

		// Funcion con Parametros
		function bienvenida($nombre, $titulacion){
			echo "Bienvenido: ".$nombre;
			echo "<br>";
			echo "Titulacion: ".$titulacion;
		}
		bienvenida('roberto Carlos', 'Analisis y Desarrollo de SI');


		//Funcion retorna Valor
		function tiempoFormacion($tiempo){
			return $tiempo." Meses";
		}
		echo "<br> su tiempo de formacion es: ".tiempoFormacion(6);


		//Funcion con parametros opcionales
		function centrodeformacion($centro, $regional = 'Caldas') {
			return "Centro de Formacion: ".$centro."<br> Regional: ".$regional;
		}
		echo "<br> ".centrodeformacion('Comercio y Servicios');

	 ?>
</body>
</html>
