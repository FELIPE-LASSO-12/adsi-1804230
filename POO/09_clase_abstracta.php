<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Clase Abstracta</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
			<h3 class="text-center">Clase Abstracta</h3>
			<hr>

			<table class="table table-striped table-bordered table-dark">
				<thead>
					<th>Nombre</th>
					<th>Cumpleaños</th>
					<th>Correo Electrónico</th>
					<th>Rol</th>
				</thead>
			
			<?php
				abstract class Database {
					protected $host;
					protected $user;
					protected $pass;
					protected $dbnm;
					protected $conx;

					public function __construct($host = 'localhost',
											    $user = 'root',
											    $pass = '',
											    $dbnm = 'adsi1804230') {
						$this->host = $host;
						$this->user = $user;
						$this->pass = $pass;
						$this->dbnm = $dbnm;
						$this->connect();

					}

					private  function connect() {
						$this->conx =mysqli_connect($this->host,$this->user,$this->pass,$this->dbnm);
						if (mysqli_connect_errno()) {
							echo "<span class='alert alert-danger'><strong>Error</strong>:".
							mysqli_connect_error().
							"</span>";
	}
					}
					protected function disconnect() {
						mysqli_close($this->conx);
					}
				}

				class User extends Database {
					private $rs;
					public function listUsers() {
						$this->rs = mysqli_query($this->conx,"SELECT * FROM users");
						while ($row = mysqli_fetch_array($this->rs)) {
							echo "<tr>";
							echo "<td>".$row['names']."</td>";
							echo "<td>".$row['birthdate']."</td>";
							echo "<td>".$row['email']."</td>";
							echo "<td>".$row['role']."</td>";
							echo "</tr>";

						}
						parent::disconnect();
					}
				}

				$user = new User();
				$user->listUsers();
			?>
			</table>
			</div>
		</div>
	</div>