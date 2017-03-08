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
		$x=5;
		$y=8;
	 ?>
		<tr>
			<th>Operador</th>
			<th>Descripcion</th>
			<th>Ejemplo</th>
			<th>Resultado</th>
		</tr>
		<tr>
			<td>==</td>
			<td>Es igual</td>
			<td>5 == 8</td>
			<td><?php echo var_dump($x==$y) ?></td>
		</tr>
		<tr>
			<td>!=</td>
			<td>No es igual</td>
			<td>5 != 8</td>
			<td><?php echo var_dump($x != $y)?></td>
		</tr>
		<tr>
			<td><></td>
			<td>No es igual</td>
			<td>5 <> 8</td>
			<td><?php echo var_dump($x <> $y)?></td>
		</tr>
		<tr>
			<td>></td>
			<td>Es mayor que</td>
			<td>5 > 8</td>
			<td><?php echo var_dump($x > $y)?></td>
		</tr>
		<tr>
			<td><</td>
			<td>Es menor que</td>
			<td>5 < 8</td>
			<td><?php echo var_dump($x < $y)?></td>
		</tr>
		<tr>
			<td>>=</td>
			<td>Es mayor o igual que</td>
			<td>5 >= 8</td>
			<td><?php echo var_dump($x >= $y)?></td>
		</tr>
		<tr>
			<td><=</td>
			<td>Es menor o igual que</td>
			<td>5 <= 8</td>
			<td><?php echo var_dump($x <= $y)?></td>
		</tr>
	</table>
</body>
</html>