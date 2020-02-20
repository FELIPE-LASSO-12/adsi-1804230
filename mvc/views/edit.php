<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome!</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-1">
			<h1 class="text-center"><i class="fa fa-pencil"> Editar Usuarios</i></h1>
			<hr>
			<div class="row">
            <div class="col-xl-6 mb-4">
            	<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item ">
			    	<a href="index.php">
			    		<i class="fa fa-home"></i>
			    		Lista Usuarios
			    	</a>
			    </li>
			    <li class="breadcrumb-item ">
			    	<i class="fa fa-pencil"></i>
			    		Editar Usuario
			    </li>
			  </ol>
			</nav>
			<?php while ($row = mysqli_fetch_array($data)) { ?>
              <form action="./" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="method" value="update">
              	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
              	<div class="form-group">
              		<label for="names">Nombre Completo:</label>
              		<input type="text" class="form-control" name="names" value="<?php echo $row['names']; ?>" required>
              	</div>
              	<!--  -->
              	<div class="form-group">
              		<label for="birthdate">Fecha de Nacimiento:</label>
              		<input type="date" class="form-control" value="<?php echo $row['birthdate']; ?>" name="birthdate" required>
              	</div>
              	<!--  -->
              	<div class="form-group">
              		<label for="email">Correo Electrónico:</label>
              		<input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email" required>
              	</div>
              	<!--  -->
              	<div class="form-group">
              		<label for="photo">Foto:</label>
              		<input type="file" class="form-control-file" value="<?php echo $row['photo']; ?>" accept="image/*" name="photo">
              	</div>

              	<div class="form-group">
              		<button class="btn btn-success">
              			<i class="fa fa-save"></i>
              			Guardar
              		</button>
              		<button type="reset" class="btn btn-danger">
              			<i class="fa fa-eraser"></i>
              			Limpiar
              		</button>
              	</div>
              </form>
			</div>
			<?php 
			}
			?>
		</div>
	</div>
</body>
</html>