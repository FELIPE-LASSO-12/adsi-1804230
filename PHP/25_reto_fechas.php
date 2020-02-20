<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reto (Fecha)</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

	<main class="container">
		<!-- mt es margin top -->
		<section class="row mt-5">
			<!-- offset-2 para que esten columnas a cada lado -->
			<div class="col-md-6 offset-md-3 text-center">
				<h1 class="text-center">Reto (Fecha)</h1>
				<hr>
				<form action="" method="POST">
					<div class="form-group">
						<label for="birthdate"> Fecha Nacimiento</label>
						<input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="dd/mm/yyyy">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-outline-success"> Calcular Edad</button>
					</div>
				</form>
				<?php 
				if($_POST) {
					$day   = date('d', strtotime($_POST['birthdate']));
					$month = date('m', strtotime($_POST['birthdate']));
					$year  = date('Y', strtotime($_POST['birthdate']));

					if (date('m') > $month) {
						$edad= date('Y')-$year;
					} else {	
						$edad= date('Y')-$year-1;
					}
					if (date('m') == $month) {
						
						if (date('d') > $day) {
							$edad= date('Y')-$year;
						} else {	
							$edad= date('Y')-$year-1;
						}
					}
					echo '<p>La edad es '.$edad.' '.' años</p>';
				}
			?>
				
				
			</div>
		</section>	
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>