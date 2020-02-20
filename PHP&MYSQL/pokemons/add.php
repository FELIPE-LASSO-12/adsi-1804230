<?php 
	include '../config/app.php'; 
	include '../config/db.php';
?>
	<?php include '../includes/header.php'; ?>

		<div class="col-md-6 offset-md-3">
			<h1 class="text-center text-muted">
			<i class="fas fa-plus fa-2x"></i>
			ADICIONAR POKEMON
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
			    	Adicionar Pokemon
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
					<label for="type">Tipo</label>
					<input class="form-control" type="text" name="type" required>
				</div>
				<div class="form-goup">
					<label for="strength">Fuerza</label>
					<input class="form-control-range" type="range" name="strength" min="0" max="2000" step="5" oninput="ostrength.value=this.value" value="0" required>
					<output id="ostrength" class="badge badge-dark"></output>
				</div>
				<div class="form-goup">
					<label for="strength">Resistencia</label>
					<input class="form-control-range" type="range" name="stamina" min="0" max="2000" step="5" oninput="ostamina.value=this.value" value="0" required>
					<output id="ostamina" class="badge badge-dark"></output>
				</div>
				<div class="form-goup">
					<label for="strength">Velocidad</label>
					<input class="form-control-range" type="range" name="speed" min="0" max="2000" step="5" oninput="ospeed.value=this.value" value="0" required>
					<output id="ospeed" class="badge badge-dark"></output>
				</div>
				<div class="form-goup">
					<label for="accuracy">Precision</label>
					<input class="form-control-range" type="range" name="accuracy" min="0" max="2000" step="5" oninput="oaccuracy.value=this.value" value="0" required>
					<output id="oaccuracy" class="badge badge-dark"></output>
				</div>
				<br>
				<div class="form-group">
					<?php 
					$sql = "SELECT * FROM trainers";
					$result = mysqli_query($con,$sql);
					 ?>
					<label for="trainer_id">Entrenador:</label>
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
					Crear Pokemon
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
					$type       = mysqli_real_escape_string($con,$_POST['type']);
					$strength   = mysqli_real_escape_string($con,$_POST['strength']);
					$stamina    = mysqli_real_escape_string($con,$_POST['stamina']);
					$speed      = mysqli_real_escape_string($con,$_POST['speed']);
					$accuracy   = mysqli_real_escape_string($con,$_POST['accuracy']);
					$trainer_id = mysqli_real_escape_string($con,$_POST['trainer_id']);


					$sql = "INSERT INTO pokemons VALUES(DEFAULT,'$name','$type',$strength,$stamina,$speed,$accuracy,$trainer_id)";
					if (mysqli_query($con,$sql)) {
						$_SESSION['message'] = "El Pokemon: ".$name. " fue adicionado con éxito!";
						echo "<script>window.location.replace('index.php');</script>";
					} else {
						echo "Error".mysqli_error($con);
					}
				}
			 ?>
		</div>
	<?php include '../includes/footer.php'; ?>