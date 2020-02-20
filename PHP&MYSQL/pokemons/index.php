<?php 
	include '../config/app.php'; 
	include '../config/db.php';
?>
	<?php include '../includes/header.php'; ?>

		<div class="col-md-8 offset-md-2">
			<h1 class="text-center text-muted">
			<i class="fas fa-dragon fa-2x"></i>
			MODULO POKEMONES
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
			    <li class="breadcrumb-item active" aria-current="page">
			    	Módulo Pokemones
			    </li>
			  </ol>
			</nav>
			<hr>
			 <?php 
			 $sql = "SELECT t.name as name_trainer,p.*
						FROM pokemons AS p, trainers AS t
						WHERE t.id =  p.trainer_id ORDER BY p.id ASC";
				$result = mysqli_query($con,$sql); 
				?>

				<a href="add.php" class="btn btn-success">
					<i class="fa fa-plus">&nbsp;&nbsp;Adicionar Pokemon</i>
				</a>
				<hr>
			<table class="table table-hover table-striped table-bordered table-dark">
				<thead class="text-center">
					<tr>
						<th>Nombre</th>
						<th>Tipo</th>
						<th>Entrenador</th>
						<th class="text-center">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['type']; ?></td>
							<td><?php echo $row['name_trainer'];?></td>
							<td class="text-center">
								<a href="show.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-secondary">
									<i class="fa fa-search"></i>
								</a>
								<a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-light">
									<i class="fa fa-pen"></i>
								</a>
								<a href="javascript:;" class="btn btn-sm btn-danger btn-delete" data-id="<?php echo $row['id']; ?>">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	<?php include '../includes/footer.php'; ?>