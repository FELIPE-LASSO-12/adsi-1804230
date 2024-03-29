<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Atributos/Métodos Privados</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h3 class="text-center btn-outline-warning rounded">Atributos/Métodos Privados</h3>
				<form action="" method="post">
					<div class="form-group">
					<label for="nf">Número de Filas:</label>
					<input type="number" name="nf" class="form-control" min="1" max="99" required>
					</div>
					<div class="form-group">
					<label for="nf">Número de Columnas:</label>
					<input type="number" name="nc" class="form-control" min="1" max="99" required>
					</div>
					<div class="form-group">
						<button class="btn btn-dark" type="submit">
							Graficar Tabla
						</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php 
					if ($_POST) {
						$nf = $_POST['nf'];
						$nc = $_POST['nc'];

						
						class Table {
							private $nf;
							private $nt;

							public function __construct($nf,$nc) {
								$this->nf = $nf;
								$this->nc = $nc;
							}

							public function drawTable() {
								$this->startTable();
								for ($i=1; $i <= $this->nf; $i++) { 
									echo "<tr>";
									for ($j=0; $j <= $this->nc; $j++) { 
										echo "<td>";
										echo "Fila:".$i."Columna:".$j;
										echo "</td>";
									}
									echo "</tr>";
								}
								$this->endTable();
							}

							private function startTable() {
								echo "<table class='table table-striped table-bordered text-center'>";
							}
							private function endTable() {
								echo "</table>";
							}
						}

						$tbl = new Table($nf,$nc);
						$tbl->drawTable();
					}
				 ?>
			</div>
		</div>
	</div>

	</body>
	</html>	

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
	
