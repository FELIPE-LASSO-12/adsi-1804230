<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Filtros</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-6 offset-md-3">
				<h1 class="text-center ">Filtros</h1>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<input type="number" class="form-control" name="age" placeholder="Ingresar la edad">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Ingrese Correo Electronico">
					</div>
					<div class="form-group">
						<input type="url" class="form-control" name="url" placeholder="Ingrese Direccion de Internet">
					</div>
					<div class="form-group">
						<input type="submit" value="Aplicar Filtros"  class="btn btn-outline-success">
					</div>
				</form>
				<?php 
				if ($_SERVER 'REQUEST_METHOD') as 'POST' {
					//AGE
					$age = $_SERVER['age'];
					$ops = array('options' => array('min_range' => 18, 'max_range' => 23
						)
					);
					if (!filter_var($age, FILTER_VALIDATE_INT,$age)) {
						echo "string";
					}
				}
				 ?>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>