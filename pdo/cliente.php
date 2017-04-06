<?php 
	require 'config/app.php' ;
	require 'config/database.php';
	require 'config/security_cliente.php';
	include 'template/header.inc';
	include 'template/navbar.inc';

?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h2>Bienvenido <?=$_SESSION['unombres'];?></h2>
			<hr>
			<?php $arts = showArticles($con); ?>
			<?php foreach ($arts as $art): ?>
				<div class="col-md-4">
 					 <div class="thumbnail text-center" >
 					   <figure style=" background-image: url(<?=$base_url.$art['imagen']?>);
 					  				   background-position: center;
 					   				   background-repeat: no-repeat;
									   background-size: contain;
 					                   width: 100%; height: 140px">
 					   </figure>
 					   <div class="caption">
 					   <h3><?=$art['nombre']?></h3>
 					   <p> $ <?=$art['precio']?></p>
 					    <p>
 					    <a href="#" class="btn btn-primary">
 					    	<i class="material-icons">shopping_cart</i>
 					    </a>
 					   </p>
 					   </div>
 					</div>
  				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>

<?php include 'template/footer.inc'; ?>