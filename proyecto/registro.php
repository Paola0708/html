<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
		if ($_GET) {
			
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
				$query= mysqli_query($conx, "INSERT INTO tabla VALUES('','$name', '$last_name', '$date', '$document','$cellphone', '$address', '$city', '$email', '$password', '$pass')");
				if ($query) {
					echo "<script>alert('Se ha registrado exitosamente');</script>";
				}else{
					echo "<script>alert('No se ha regitrado');</script>";
				}
				
			}else{
				echo "<script>alert('No entro Campos');</script>";
			}
		}

	 ?>

</body>
</html>