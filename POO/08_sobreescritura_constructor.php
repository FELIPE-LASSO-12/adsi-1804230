<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Sobreescritura de Constructor</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
			<h3 class="text-center">Sobreescritura de Constructor</h3>
			<hr>
			<?php
				class Vehicle {
					protected $brand;
					protected $refer;
					protected $color;

				public function __construct($brand,$refer){
					$this->brand = $brand;
					$this->refer = $refer;
				}
			}

			class Auto extends Vehicle {
				public function __construct($brand,$refer,$color) {
					parent::__construct($brand,$refer);
						$this->color = $color;
					}
				public function getVehicle(){
				echo "<li class='list-group-item'> <strong>Marca: </strong>".$this->brand."</li>";
				echo "<li class='list-group-item'> <strong>Referencia: </strong>".$this->refer."</li>";
				echo "<li class='list-group-item'> <strong>Color: </strong>".$this->color."</li><br>";
				}
			}			
				

			$vh = new Auto("Audi","A5 SportBack","Amarillo");
			$vh->getVehicle();
			$vh = new Auto("Audi","A5 Coupe","Azul");
			$vh->getVehicle();
			$vh = new Auto("Audi","A5 Sedan","Rojo");
			$vh->getVehicle();
			?>
			</div>
		</div>
	</div>