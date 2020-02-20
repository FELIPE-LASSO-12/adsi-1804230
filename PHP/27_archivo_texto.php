<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Archivos Texto Plano</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center text-dark">Archivos Texto Plano</h1>
				<hr>
				<div class="alert alert-info text-justify text-success">
				<?php 
					$file = fopen('text/lorem.txt', 'r') or exit('No se encontró el archivo!!');

					while (!feof($file)) {
						echo fgets($file);	
					}
					fclose($file);
				 ?>
			    </div>
			    <div class="alert alert-dark text-justify text-success">
				<?php 
					$file = fopen('text/lorem.txt', 'r') or exit('No se encontró el archivo!!');

					while (!feof($file)) {
						echo fgetc($file).'/';	
					}
					fclose($file);
				 ?>
			    </div>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>