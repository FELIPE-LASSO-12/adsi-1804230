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
			<div class="col-md-6 offset-3">
			<h1 class="text-center"><i class="fa fa-search"> Consulta de Usuarios</i></h1>
			<hr>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item ">
			    	<a href="index.php">
			    		<i class="fa fa-home"></i>
			    		Lista Usuarios
			    	</a>
			    </li>
			    <li class="breadcrumb-item ">
			    	<i class="fa fa-search"></i>
			    		Mostrar Usuario
			    </li>
			  </ol>
			</nav>
				<table class="table table-striped table-hover">
					<thead>
							<?php  
							while ($row = mysqli_fetch_array($data)) {
							?>
						<tr>
			                 <td colspan="2" class="text-center">
			                   <img class="rounded-circle img-thumbnail" src="<?php echo $row['photo'] ?>"  style="width:14rem; height:14rem;" >
			                 </td>
		                </tr>
						<tr>
							<th>Nombre Completo</th>
							<td><?php echo $row['names'] ?></td>
						</tr>
						<tr>
							<th>Fecha de Nacimiento</th>
					 		<td><?php echo $row['birthdate'] ?></td>
					 	</tr>
					 	<tr>
							<th>Correo Electrónico</th>
					 		<td><?php echo $row['email'] ?></td>
					 	</tr>
					 	<tr>
							<th>Rol</th>
					 		<td><?php echo $row['role'] ?></td>
					 	</tr>
					 	<tr>
							<th>Estado</th>
	                     	<td><?php if($row['status'] == "Active"): ?>
	                                <span class="badge badge-success">
	                                  <i class="fa fa-check"></i>&nbsp;Activo
	                                </span>
	                              <?php else: ?>
	                                <span class="badge badge-danger">
	                                  <i class="fa fa-times"></i>&nbsp;Inactivo
	                                </span>
	                         	<?php endif ?>
	                    	</td>
						</tr>
					</thead>
					<tbody>
					 <tr>
					 </tr>
				<?php 
					}
				?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>