<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matrices</title>
</head>
<body>
	<h1>Matrices</h1>
	<hr>

	<?php 

		//la forma lar(incrorrecta)
		$vh1 = "Volkswagen";
		$vh2 = "Renault";
		$vh3 = "Chevrolet";
		$vh4 = "Mazda";
		$vh5 = "Ford";

		// la forma corta(Correcta) - Indices Manuales
		$vehiculos = array('Volkswagen', 'Renault', 'Chevrolet', 'Mazda', 'Ford');

		// Indices Manuales
		$vehiculos[5] = 'kia';
		$vehiculos[6] = 'Fiat';
		$vehiculos[7] = 'Toyota';
		$vehiculos[8] = 'Hyundai';

		echo "<h3>Numericos:</h3>";
	    var_dump($vehiculos);

	    echo "<br><br> Mi Vehiculo Favorito es: ".$vehiculos[8];

		//Asociativos
		$referencias = array('Volkswagen' => 'Golf', 
							 'Renault'    => 'Duster', 
							 'Chevrolet'  => 'Traker', 
							 'Mazda'      => 'CX6', 
							 'Ford'       => 'Fusion'
							 ); 

		$referencias['kia']     = 'Picanto';
		$referencias['Fiat']    = 'Palio';
		$referencias['Toyota']  = 'Prado';
		$referencias['Hyundai'] = 'i30';


		echo "<h3>Asociativos:</h3>";
	    var_dump($referencias);

	    echo "<br><br> Mi Referencia de Vehiculo Favorito es: ".$referencias['Ford'];

	    //Multidimencionales
	    $familias = array(
	    			'Stark' => array('Eddard', 'Robb', 'Sansa', 'Arya', 'Brandon', 'Rickon'),
	    			'Targayen' => array('Aegon', 'Aenys', 'Daenerys', 'Maegor'),
	    			'Lannister' => array('Tywin', 'Tyrion', 'Cercei', 'Jaime'),
	    			'Baratheon' => array('Robert', 'Renly', 'Tommen', 'Stannis')

	    	   );

	    echo "<h3>Multidimencionales:</h3>";
	    var_dump($familias);

	    echo "<br><br> Mi integranre de la Familia de GOT es: ".$familias['Stark'][1];

	 ?>
</body>
</html>
