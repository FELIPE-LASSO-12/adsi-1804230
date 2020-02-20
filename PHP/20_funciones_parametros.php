<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Funciones (Paraámetros)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center ">Funciones (Parámetros)</h1>
				<hr>

				<?php 
				function show_info($name, $description) {
					echo '<h1 class="display-4 text-center">'.$name.' </h1>';
					echo '<p class="lead text-center">'.$description.' </p>';
					} 
				?>
				<div class="jumbotron jumbotron-fluid">
  				<div class="container">
   				 <?php 
   				 	$descr = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque harum odit magnam ad sequi consequuntur repellendus totam nulla, dolore maxime, est, enim dolorem quibusdam nostrum, ullam animi quos? Dolore, vel!";
   				 	show_info('Saitama Sensei', $descr);
   				 	show_info('Garou', "One punch man season 2");
   				 ?>
  				</div>
				</div>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>