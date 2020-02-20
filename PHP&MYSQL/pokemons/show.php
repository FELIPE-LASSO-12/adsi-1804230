<?php 
	include '../config/app.php'; 
	include '../config/db.php';
?>
	<?php include '../includes/header.php'; ?>

		<div class="col-md-6 offset-md-3">
			<h1 class="text-center text-muted">
			<i class="fas fa-search fa-2x"></i>
			CONSULTAR POKEMON
			</h1>
			<hr>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item ">
			    	<a href="<?php echo $url; ?>">
			    		<i class="fa fa-home"></i>
			    		Inicio
			    	</a>
			    </li>
			    <li class="breadcrumb-item ">
			    	<a href="<?php echo $url; ?>pokemons/">
			    		<i class="fas fa-dragon"></i>
			    		Módulo Pokemones
			    	</a>
			    </li>
			    <li class="breadcrumb-item active" aria-current="page">
			    	Consultar Pokemon
			    </li>
			  </ol>
			</nav>
			<hr>
			<table class="table table-hover table-bordered table-striped">
				<?php 
					if (isset($_GET['id'])) {
						$id 	= $_GET['id'];
						$sql    = " SELECT t.name as name_trainer,p.*
									FROM trainers AS t, pokemons AS p
									WHERE t.id =  p.trainer_id 
									AND p.id = $id 
								    ORDER BY p.id ASC";

						$result = mysqli_query($con,$sql);
						while ($row = mysqli_fetch_array($result)) {				
					?>
					<tr>
						<th>Id:</th>
						<td><?php echo $row['id']; ?></td>
					</tr>
					<tr>
						<th>Nombre:</th>
						<td><?php echo $row['name']; ?></td>
					</tr>
					<tr>
						<th>Tipo:</th>
						<td>
						<?php if ($row['type'] == 'fuego'): ?> 
							<span class="badge badge-danger">
								<?php echo $row['type']; ?>
							</span>	
							<?php elseif ($row['type'] == 'Electrico'): ?> 
								<span class="bafge badge-warning">
								<?php echo $row['type']; ?>
							</span>
							<?php elseif ($row['type'] == 'Agua'): ?> 
								<span class="bafge badge-info">
								<?php echo $row['type']; ?>
							</span>
							<?php elseif ($row['type'] == 'Planta'): ?> 
								<span class="bafge badge-success">
								<?php echo $row['type']; ?>
							</span>
							<?php elseif ($row['type'] == 'Fantasma'): ?> 
								<span class="bafge badge-light">
								<?php echo $row['type']; ?>
							</span>
							<?php elseif ($row['type'] == 'Normal'): ?> 
								<span class="bafge badge-warning">
								<?php echo $row['type']; ?>
							</span>	
						<?php else: ?>
						<span class="badge badge-default">
							<?php echo$row['type']; ?>
						</span>
						<?php endif ?>
						</td>
					</tr>
					<tr>
						<th>Fuerza:</th>
						<td><?php echo $row['strength']; ?></td>
					</tr>
					<tr>
						<th>Resistencia:</th>
						<td><?php echo $row['stamina']; ?></td>
					</tr>
					<tr>
						<th>Velocidad:</th>
						<td><?php echo $row['speed']; ?></td>
					</tr>
					<tr>
						<th>Precision:</th>
						<td><?php echo $row['accuracy']; ?></td>
					</tr>
					<tr>
						<th>Entrenador:</th>
						<td><?php echo $row['name_trainer']; ?></td>
					</tr>
					<?php 

						} 
					}	

				 ?>
			</table>
		</div>
	<?php include '../includes/footer.php'; ?>