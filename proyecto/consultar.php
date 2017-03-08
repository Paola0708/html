<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>consultar PHP</title>
</head>
<body>
	<table border="2px">
	<tr><td>nombre</td><td>apellido</td><td>Fecha de Nacimiento</td><td>Documento</td><td>Celular</td><td>Direccion</td><td>Ciudad</td><td>Email</td></tr>
	<?php 
		if ($_GET) {
			$id=$_GET['id'];
			$conx = mysqli_connect('localhost','root','','proyecto');
			$query = mysqli_query($conx, "SELECT * FROM tabla WHERE id =$id");

			$row = mysqli_fetch_array($query);
		}
		

	?>
	<tr><td><?php echo $row['name']; ?></td><td><?php echo $row['last_name']; ?></td><td><?php echo $row['date']; ?></td><td><?php echo $row['document']; ?></td><td><?php echo $row['cellphone']; ?></td><td><?php echo $row['address']; ?></td><td><?php echo $row['city']; ?></td><td><?php echo $row['email']; ?></td><td><?php echo $row['email']; ?></td></tr>
	</table>	
</body>
</html>