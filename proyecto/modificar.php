<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar PHP</title>
</head>
<body>
	<?php 

		if($_POST){
			$name = $_GET['name'];
			$last_name = $_GET['last_name'];
			$date = $_GET['date'];
			$document = $_GET['document'];
			$cellphone = $_GET['cellphone'];
			$address = $_GET['address'];
			$city = $_GET['city'];
			$email = $_GET['email'];
			$password = $_GET['password'];
			$pass = $_GET['pass'];

			if ($name !='' && $last_name !='' && $date !='' && $document !='' && $cellphone !='' && $address!='' && $city !='' && $email !='' && $password !='' && $pass !='') {
				$conx=mysqli_connect('localhost','root','','proyecto');
				/*$query = mysqli_query($conex, "INSERT INTO usuarios VALUES('','$nombres','$apellidos','$correo','$celular', '$genero', '$tipo_documento', '$documento')");*/

				$modificar = mysqli_query($conex, "UPDATE tabla SET name = '$name', last_name = '$last_name', date = '$date', document = '$document', cellphone = '$cellphone', address = '$address', city = '$city', email ='$email', password ='$password', pass = '$pass'  WHERE id = $id");
				

			}
			else {
				echo "<script>alert('Hay campos vacíos por favor llenelos');</script>";
			}
		}
	?>
</body>
</html>