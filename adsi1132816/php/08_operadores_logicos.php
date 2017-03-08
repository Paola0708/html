<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores Asignacion PHP</title>
	<style>
		body{
			font-family: Arial;
		}
		table{
			border-collapse: collapse;
		}
		table td, table th{
			background-color: #ddd;
			border: 1px solid #ccc;
			color: #666;
			padding: 10px;
		}
		table th{
			background-color: #999;
			color: #fff;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>Operadores Asignacion PHP</h1>
	<hr>
	<table>
	<?php 
		$x=6;
		$y=3;
	 ?>
		<tr>
			<th>Operador</th>
			<th>Descripcion</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>&&</td>
			<td>Y (And)</td>
			<td>x = 6; y = 3; ( x < 10 && y > 1 )</td>
			<td><? var_dump($x < 10 && $y > 1) ?></td>
		</tr>
		<tr>
			<td>||</td>
			<td>O (or)</td>
			<td>x = 6; y = 3; ( x == 5 || y == 5 )</td>
			<td><? var_dump( $x == 5 || $y == 5 )?></td>
		</tr>
		<tr>
			<td>!</td>
			<td>No (not)</td>
			<td>x = 6; y = 3; ( x == y )</td>
			<td><?php echo var_dump($x == $y)?></td>
		</tr>
		
	</table>
</body>
</html>