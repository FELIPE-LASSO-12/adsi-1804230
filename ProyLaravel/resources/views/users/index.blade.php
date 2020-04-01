<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	
	<div class="container">
		<h1 class="text-center">Lista de Usuarios</h1>
		<hr>
		<div class="row">
			<div class="col-md-9">
				<a href="{{url('users/create')}}" class="btn btn-success">
					<i class="fa fa-plus" ></i>
					Adicionar Usuario
				</a>
				<br><br>
				@if (session('message'))
				{{session('message')}}
				@endif
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Nombre Completo</th>
							<th>Correo Electrónico</th>
							<th>Teléfono</th>
							<th colspan="2" class="text-center">Acciones</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr>
								<td>{{ $user->fullname }}</td>
								<td>{{ $user->email }}</td>
								<td>{{ $user->phone }}</td>
								<td>
								<a href="{{ url('users/'.$user->id) }}" class="btn btn-sm btn-primary">
								<i class="fa fa-search"></i>
									</a>
								</td>
								<td>
								<a href="{{ url('users/'.$user->id.'/edit/') }}" class="btn btn-sm btn-info">
								<i class="fa fa-pencil"></i>
								</a>
								</td>
								<td>
									<a href="{{ url('users/'.$user->id.'/delete/') }}" class="btn btn-sm btn-danger">
								<i class="fa fa-trash"></i>
								</a>
								</td>
								
								</td>	
							</tr>
							@endforeach
						</tbody>	
				</table>
				
			</div>
		</div>
	</div>
	
	
</body>
</html>