<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>subir Archivos al Servidor</title>
</head>
<body>
	<h1>subir Archivos al Servidor</h1>
	<hr>

	<form action="" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend><h2>subir Fotos</h2></legend>
			<input type="file" name="foto" accept="image/*">
			<br>
			<br>
			<input type="submit" value="Subir Foto">
		</fieldset>
	</form>
		
	<?php  

		if ($_FILES) {

			if ($_FILES['foto']['size'] < 1000000 && 
				$_FILES['foto']['type'] == 'image/png') {
				
			
			
			if ($_FILES['foto']['error'] > 0) {
				echo "Error: ".$_FILES['foto']['error'];
			}else{
				echo "<li>Nombre:              ".$_FILES['foto']['name']."</li>";
				echo "<li>Tipo:                ".$_FILES['foto']['type']."</li>";
				echo "<li>Tamaño:              ".$_FILES['foto']['size'] / 1024 ." kb"."</li>";
				echo "<li>Almacenado Temporal: ".$_FILES['foto']['tmp_name']."</li>";

				if (file_exists('subir/'.$_FILES['foto']['name'])) {
					echo "El archivo ".$_FILES['foto']['name']." ya existe";
				}else{
					move_uploaded_file($_FILES['foto']['tmp_name'], 'subir/'.$_FILES['foto']['name']);
					echo "El archivo se subio con Exito!";
				}

			}
		}else{
			echo "Error: la imagen no es png o es muy grande!";
		}
	}

	?>
</body>
</html>