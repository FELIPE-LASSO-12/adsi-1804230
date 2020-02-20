<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Arreglos</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2 text-center">
				<h1 class="text-center ">Arreglos Indice Numérico</h1>
				<hr>
				<?php
				$students = array('Tanjiro Kamado' => 16,
								  'Nezuko Tamado' => 15,
								  'Zenitsu Agatsuma' => 17,
								   'Inosuke Hashibira' => 18);
				$students['Genya'] = 20;
				$students['Kanao'] = 19;

				// var = var_dump($students);
				 ?>
				 <div class=" btn-group-vertical">
				 	<?php foreach ($students as $key => $value): ?>
				 		<button type="button" class="btn btn-info">
				 			<?php echo $key; ?>
				 			<span class="badge badge-danger"><?php echo $value ?></span>
				 		</button>
				 	<?php endforeach ?>
				 </div>
				</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>