<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fechas (DATE)</title>
</head>
<body>
	<h1>Fechas (DATE)<?php echo date('Y-m-d'); ?></h1>
	<hr>

	<p>Mi fecha de nacimeinto: <?php echo date('Y-m-d', 1488409676); ?></p>
	<?php //echo mktime('0,0,04,21,1998'); ?>

	<?php 

		$manana = mktime(0,0,0,date('m'), date('d')+1, date('Y'));
		echo "Mañana es: ".date('Y-m-d', $manana);

	 ?>
</body>
</html>
