<?php 
	include '../config/app.php'; 
	include '../config/db.php';
?>
	<?php include '../includes/header.php'; ?>

		<div class="col-md-6 offset-md-3">
			<h1 class="text-center text-muted">
			<i class="fas fa-plus fa-2x"></i>
			ADICIONAR ENTRANDOR
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
			    		<i class="fas fa-users"></i>
			    		Módulo Entrenasdores
			    	</a>
			    </li>
			    <li class="breadcrumb-item active" aria-current="page">
			    	Adicionar Entrenador
			    </li>
			  </ol>
			</nav>
			<hr>
			<form action="" method="post">
				<div class="form-goup">
					<label for="name">Nombre</label>
					<input class="form-control" type="text" name="name" required>
				</div>
				<div class="form-goup">
					<label for="type">Nivel</label>
					<input class="form-control" type="text" name="level" required>
				</div>
				
				<br>
				<div class="form-group">
					<?php 
					$sql = "SELECT * FROM trainers";
					$result = mysqli_query($con,$sql);
					 ?>
					<label for="gym_id">Gimnasio:</label>
					<select name="trainer_id" class="form-control">
						<option value="">Seleccione...</option>
						<?php while($row = mysqli_fetch_array($result)) { ?>
							<option value="<?php echo $row['id'] ?>">
								<?php echo $row['name']; ?>
							</option>
						<?php } ?>
					</select>
				</div> 
				<br>
				<div class="form-group">
					<button type="submit" class="btn btn-success">
					<i class="fa fa-save"></i>
					Crear Entrenador
				</button>
					<button type="reset" class="btn btn-danger">
					<i class="fa fa-clear"></i>
					Limpiar Formulario
				</button>
				</div>
				
			</form>
			<?php 
				if ($_POST) {
					$name  	    = mysqli_real_escape_string($con,$_POST['name']);
					$level       = mysqli_real_escape_string($con,$_POST['level']);
					$gym_id   = mysqli_real_escape_string($con,$_POST['gym_id']);


					$sql = "INSERT INTO gyms VALUES(DEFAULT,'$name',$level,$gym_id)";
					if (mysqli_query($con,$sql)) {
						$_SESSION['message'] = "El Entrenador: ".$name. " fue adicionado con éxito!";
						echo "<script>window.location.replace('index.php');</script>";
					} else {
						echo "Error".mysqli_error($con);
					}
				}
			 ?>
		</div>
	<?php include '../includes/footer.php'; ?>