<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Parámetros (Objeto-Obligatorio-Opcional)</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
			<h3 class="text-center">Colaboracion</h3>
			<hr>
			<?php 
			class Country {
				public $name;
				public function __construct($name) {
					$this->name = $name;
				}
			}

			class FifaWorldCup {
				private $country;
				private $year;
				private $winner;

				public function __construct($country,$year,$winner = 'Brasil') {
					$this->country = $country;
					$this->year    = $year;
					$this->winner    = $winner;
				}

				public function showEvent() {
					echo "<ul class='list-group text-center'>";
					echo "<li class='list-group-item list-group-item-warning'>"."Pais: ".$this->country->name."</li>";
					echo "<li class='list-group-item list-group-item-primary'>"."Año: ".$this->year."</li>";
					echo "<li class='list-group-item list-group-item-danger'>"."Ganador: ".$this->winner."</li>";
					echo "</ul><br>";
				}
			}

			$cn = new Country('USA');
			$fwc= new FifaWorldCup($cn,1994);
			$fwc->showEvent();

			$cn = new Country('Italia');
			$fwc= new FifaWorldCup($cn,1998,'Alemania');
			$fwc->showEvent();

			$cn = new Country('Francia');
			$fwc= new FifaWorldCup($cn,1998,'Francia');
			$fwc->showEvent();
			 ?>
	    	</div>
		</div>
	</div>