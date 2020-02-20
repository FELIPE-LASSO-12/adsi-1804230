<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Cloaboración</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">

			<div class="col-md-6 offset-md-3">
			<h3 class="text-center">Colaboracion</h3>
			<hr>
			<ul class="list-group text-center">
			<?php 

			class Evolve {
				public function evolvePokemon($curr,$evol) {
					echo "<li class='list-group-item list-group-item-info'>";
					echo $curr." => ".$evol;
					echo "</li>";
				}

				}

			class Pokemon {
				private $curr;
				private $evol;
				private $colla;

				public function __construct($curr,$evol) {
					$this->curr = $curr;
					$this->evol = $evol;
					//Colaboracion
					$this->colla = new Evolve;
				}

				public function nextLevel() {
					$this->colla->evolvePokemon($this->curr, $this->evol);
				}

				}

				$pk1 = new Pokemon('Pichu','Pikachu');
				$pk1->nextLevel();

				$pk2 = new Pokemon('Pichu','Raichu');
				$pk2->nextLevel();

				$pk3 = new Pokemon('Squirtle','Wartortle');
				$pk3->nextLevel();

				$pk4 = new Pokemon('Wartortle','Blastoise');
				$pk4->nextLevel();

				$pk5 = new Pokemon('Bulbassaur','Ivysaur');
				$pk5->nextLevel();

				$pk6 = new Pokemon('Ivysaur','Venusaur');
				$pk6->nextLevel();
			 ?>
			
			</ul>
			</div>	
		</div>
	</div>

	</body>
	</html>	

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
	
