<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Lista de Usuarios</h1>
	<hr>
	<a href="{{url('users/create')}}">Adicionar Usuario</a>
	<hr>
	@if (session('message'))
	{{session('message')}}
	@endif
	<table>
		<thead>
			<tr>
				<th>Nombre Completo</th>
				<th>Correo Electrónico</th>
				<th>Teléfono</th>
				<th>Geneerp</th>
				<th>Direccion</th>
				<th>Contraseña</th>



			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $user->fullname }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->phone }}</td>
				<td>{{ $user->gender }}</td>
				<td>{{ $user->address }}</td>


			</tr>
			@endforeach
		</tbody>
		
	</table>
</body>
</html>