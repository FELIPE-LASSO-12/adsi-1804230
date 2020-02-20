<?php 
	include '../config/app.php'; 
	include '../config/db.php';
?>
	<?php include '../includes/header.php'; ?>

		<div class="col-md-6 offset-md-3">
			<h1 class="text-center text-muted">
			<i class="fas fa-plus fa-2x"></i>
			ADICIONAR GIMNASIO
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
			    	<a href="<?php echo $url; ?>gyms/">
			    		<i class="fas fa-building"></i>
			    		Módulo Gimnasios
			    	</a>
			    </li>
			    <li class="breadcrumb-item active" aria-current="page">
			    	Adicionar Gimnasio
			    </li>
			  </ol>
			</nav>
			<hr>
			<form action="" method="post">
				<div class="form-goup">
					<label for="name">Nombre</label>
					<input class="form-control" type="text" name="name" required autocomplete="off">
				</div>
				<br>
				<div class="form-group">
					<button type="submit" class="btn btn-success">
					<i class="fa fa-save"></i>
					Crear Gimnasio
				</button>
					<button type="reset" class="btn btn-danger">
					<i class="fa fa-clear"></i>
					Limpiar Formulario
				</button>
				</div>
				
			</form>
			<?php 
				if ($_POST) {
					$name = mysqli_real_escape_string($con,$_POST['name']);


					$sql = "INSERT INTO gyms VALUES(DEFAULT,'$name')";
					if (mysqli_query($con,$sql)) {
						$_SESSION['message'] = "El Gimnasio: ".$name. " fue adicionado con éxito!";
						echo "<script>window.location.replace('index.php');</script>";
					} else {
						echo "Error".mysqli_error($con);
					}
				}
			 ?>
		</div>
	<?php include '../includes/footer.php'; ?>