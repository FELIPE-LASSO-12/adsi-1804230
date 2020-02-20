<?php 
	include '../config/app.php'; 
	include '../config/db.php';
?>
	<?php include '../includes/header.php'; ?>

		<div class="col-md-8 offset-md-2">
			<h1 class="text-center text-muted">
			<i class="fas fa-building fa-2x"></i>
			MODULO GIMNASIOS
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
			    	Módulo Gimnasios
			    </li>
			  </ol>
			</nav>
			<hr>
			 <?php 
			 $sql = "SELECT * FROM gyms ORDER BY id ASC";
				$result = mysqli_query($con,$sql); 
				?>

				<a href="add.php" class="btn btn-success">
					<i class="fa fa-plus">&nbsp;&nbsp;Adicionar Gimnasio</i>
				</a>
				<hr>
			<table class="table table-hover table-striped table-bordered table-dark">
				<thead class="text-center">
					<tr>
						<th>Entrenador</th>
						<th class="text-center">Acciones</th>
					</tr>
				</thead>
				<tbody>
					<?php while($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td><?php echo $row['name']; ?></td>
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