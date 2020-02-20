<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Herencia</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
			<h3 class="text-center">Herencia</h3>
			<hr>

				<?php
				class Operacion {
					protected $num1;
					protected $num2;
					protected $resultado;

				public function __construct($num1,$num2){
					$this->num1 = $num1;
					$this->num2 = $num2;

				}
			}

				class Sum extends Operacion {
					public function calculate(){
						return $this->resultado ="La suma de " .$this->num1." y ".$this->num2." = ".($this->num1 + $this->num2);
					}
				}
				class Subtract extends Operacion {
					public function calculate(){
						return $this->resultado ="La resta de " .$this->num1." y ".$this->num2." = ".($this->num1 - $this->num2);
					}
				}
				class Div extends Operacion {
					public function calculate(){
						return $this->resultado ="La división de " .$this->num1." y ".$this->num2." = ".($this->num1 / $this->num2);
					}
				}
				class Multi extends Operacion {
					public function calculate(){
						return $this->resultado ="La multiplicicación de " .$this->num1." y ".$this->num2." = ".($this->num1 * $this->num2);
					}
				}

				class Expo extends Operacion {
					public function calculate(){
						return $this->resultado ="El numero " .$this->num1." elevado a la ".$this->num2." = ".pow($this->num1, $this->num2);
					}
				}

				$op = new Sum(7,23);
				echo "<div class='alert alert-info text-center'>";
				echo $op->calculate();
				echo "</div>";

				$op = new Subtract(23,19);
				echo "<div class='alert alert-info text-center'>";
				echo $op->calculate();
				echo "</div>";

				$op = new Div(100,2);
				echo "<div class='alert alert-info text-center'>";
				echo $op->calculate();
				echo "</div>";

				$op = new Multi(23,3);
				echo "<div class='alert alert-info text-center'>";
				echo $op->calculate();
				echo "</div>";

				$op = new Expo(4,3);
				echo "<div class='alert alert-info text-center'>";
				echo $op->calculate();
				echo "</div>";

				/*public function cargarNum1($n1) {
					$this->num1 = $n1;
					}
					public function cargarNum2($n2) {
					$this->num2 = $n2;
					}

				public function imprimirResultado() {
					echo "<ul class='list-group text-center'>";
						echo "<li class='list-group-item'> <strong>Suma: </strong>".$this->num1."+".$this->num2." <strong>Resultado:</strong> ".$this->resultado."</li>";
						echo "</ul><br>";
						}
					}
				class Producto extends Operacion {
					public function calcular() {
					$this->resultado = $this->num1 + $this->num2;
					}
					}
					$res = new Producto();
					$res->cargarNum1(6);
					$res->cargarNum2(6);
					$res->calcular();
					$res->imprimirResultado();*/
					?>

			</div>
		</div>
	</div>			