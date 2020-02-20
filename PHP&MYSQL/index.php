<?php 
	include 'config/app.php'; 
	include 'config/db.php';
?>
	<?php include 'includes/header.php'; ?>

		<div class="col-md-8 offset-md-2">
			<h1 class="text-center text-muted">PHP & MYSQL</h1>
			<hr>
			<div class="jumbotron text-center">
				<img src="<?php echo $imgs ?>pokemon.png" width="480px" >
				<hr>
				<div class="">
					<a class="btn btn-outline-warning" href="pokemons/">
					<i class="fas fa-dragon fa-2x"></i>	
					Módulo Pokemones</a>
					<a class="btn btn-outline-danger" href="trainers/">
					<i class="fa fa-users fa-2x"></i>	
					Módulo Entrenadores</a>
					<a class="btn btn-outline-primary" href="gyms/">
					<i class="fa fa-building fa-2x"></i>	
					&nbsp;&nbsp;&nbsp;Módulo Gimnasios</a>
				</div>
			</div>
		</div>
	<?php include 'includes/footer.php'; ?>