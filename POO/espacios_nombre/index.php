<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nombre de Espacios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h1 class="h3 text-center">Nombre de Espacios</h1>
				<hr>
				<ul class="list-group">
				<?php 

					include 'electric/pokemon.php';
					include 'fire/pokemon.php';
					include 'water/pokemon.php';
 
					use \electric\pokemon as pke;
					use \fire\pokemon as pkf;
					use \water\pokemon as pkw;

					$pk = new  pke('Pikachu','Yellow');
					echo $pk->getInfoPokemon();

					$pk = new  pke('Charmander','Orange');
					echo $pk->getInfoPokemon();

					$pk = new  pke('Pikachu','Aqua');
					echo $pk->getInfoPokemon();
				?>
				</ul>
 			</div>
 		</div>
 	</div>
</body>
</html>