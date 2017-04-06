<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Excepciones (TRY, THROW, CATCH)</title>
</head>
<body>
	<h1>Excepciones (TRY, THROW, CATCH)</h1>
	<hr>

	<?php 

		function varificarEdad($edad){
			if($edad >= 18){
				echo "<h3>Es mayor de edad</h3>";
			}else{
				throw new Exception("Usted no puede votar");
				
			}
		}
        
        try {
        	varificarEdad(15);
        	
        } catch (Exception $e) {
        	echo "Error: ".$e->getMessage();
        }
	 ?>
</body>
</html>