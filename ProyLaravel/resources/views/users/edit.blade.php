<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
          <!-- Page Heading -->
          <div class="col-md-8 offset-2">
            <h1> <i class="fa fa-plus"></i> 
            &nbsp;Adicionar Usuario</h1>
          
		  <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item ">
			    	<a href="index.php">
			    		<i class="fa fa-home"></i>
			    		Lista Usuarios
			    	</a>
			    </li>
			    <li class="breadcrumb-item ">
			    	<i class="fa fa-plus"></i>
			    		Adicionar Usuario
			    </li>
			  </ol>
			</nav>
          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-6 mb-4">
              <form action="./" method="post" enctype="multipart/form-data">
              	<input type="hidden" name="method" value="store">
              	<div class="form-group">
              		<label for="names">Nombre Completo:</label>
              		<input type="text" class="form-control" name="names" required>
              	</div>
              	<!--  -->
              	<div class="form-group">
              		<label for="birthdate">Fecha de Nacimiento:</label>
              		<input type="date" class="form-control" name="birthdate" required>
              	</div>
              	<!--  -->
              	<div class="form-group">
              		<label for="email">Correo Electrónico:</label>
              		<input type="email" class="form-control" name="email" required>
              	</div>
              	<!--  -->
              	<div class="form-group">
              		<label for="password">Contraseña:</label>
              		<input type="password" class="form-control" name="password" required>
              	</div>
              	<div class="form-group">
              		<label for="photo">Foto:</label>
              		<input type="file" class="form-control-file" accept="image/*" name="photo" required>
              	</div>
				<!--  -->
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
          </div>
        </div>
        </div>
</body>
</html>