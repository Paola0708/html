<?php 
	require '../../config/app.php' ;
	require '../../config/database.php';
	require '../../config/security_admin.php';
	include '../../template/header.inc';
	include '../../template/navbar.inc';

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center">
		<ol class="breadcrumb">
			<li><a href="../../index.php">Menu Principal</a></li>
			<li><a href="index.php">Modulo Articulos</a></li>
			<li class="active">Consultar Articulo</li>
		</ol>
		<h4 class="text-uppercase">Consultar Articulo</h4>		
		<hr>
		<?php if ($_GET): ?>
		<?php
			$id = $_GET['id'];
			$art = showArticle($con, $id);
		  ?>
		  <?php foreach ($art as $a): ?>
		  	<table class="table table-hover">
		  		<tr>
		  			<th>ID:</th>
		  			<td><?=$a['id']?></td>
		  		</tr>
		  		<tr>
		  			<th>Nombre:</th>
		  			<td><?=$a['nombre']?></td>
		  		</tr>
				<tr>
		  			<th>Precio:</th>
		  			<td> $ <?=number_format($a['precio'])?></td>
		  		</tr>
		  		<tr>
		  			<th>Imagen:</th>
		  			<td><img src="<?=$base_url.$a['imagen']?>" width="240"></td>
		  		</tr>
		  	</table>
		  <?php endforeach ?>
		<?php else: ?>
			<h5 class='text-muted'>No se Puede Realizar la Consulta</h5>
		<?php endif ?>
		</div>
	</div>
</div>

<?php include '../../template/footer.inc'; ?>