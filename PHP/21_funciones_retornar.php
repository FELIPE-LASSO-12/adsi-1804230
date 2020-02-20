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
				function show_name($name) {
					return $name;
					} 
					function show_result($h1, $h2) {
						return $h1 * $h2;
					}
				?>
				<div class="jumbotron jumbotron-fluid">
  				<div class="container">	 
   				 	<h1 class="display-4 text-center"> <?php echo show_name('Hideo Kojima'); ?></h1>
   				 	<p class="lead">23 * 15 = <?php echo show_result(23, 15); ?></p>
  				</div>
				</div>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>