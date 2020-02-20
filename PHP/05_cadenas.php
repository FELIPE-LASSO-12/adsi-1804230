<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Cadenas / PHP</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<main class="container">
		<section class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<h1 class="text-center text-darklk">Cadenas</h1>
				<hr>
				<?php 
				//Concatenas
					$tbl1 = 'table';
					$tbl2 = 'table-bordered';
					$tbl3 = 'table-hover table-dark';
					$class = $tbl1." ".$tbl2." ".$tbl3." table-stripped";
					//Cadena
					$string1 = "ADSI 1804230";
					$string2 = "sena regional caldas";
					$string3 = "Hola Mundo";
			    ?>
			    <table class="<?php echo $class ?>">
			    	<thead>
			    		<tr>
			    			<th class="text-justify text-center text-info">Método</th>
			    			<th class="text-justify text-center text-info">Descripción</th>
			    			<th class="text-justify text-center text-info">Cadena</th>
			    			<th class="text-justify text-center text-info">Resultado</th>

			    		</tr>
			    	</thead>
			    	<tbody>
			    		<tr>
			    			<td class="text-success text-center">strlen()</td>
			    			<td class="text-center">Longitud de la cadena</td>
			    			<td class="text-center"><?php echo $string1; ?></td>
			    			<td class="text-center"><?php echo strlen($string1); ?></td>
			    		</tr>
			    		<tr>
			    			<td class="text-success text-center">strpos()</td>
			    			<td class="text-center">Posición donde coincide la cadena</td>
			    			<td class="text-center"><?php echo $string1; ?>-1804230</td>
			    			<td class="text-center"><?php echo strpos($string1,"1804230"); ?></td>
			    		</tr>
						<tr>
			    			<td class="text-success text-center">strtoupper()</td>
			    			<td class="text-center">Cadena en Mayúscula</td>
			    			<td class="text-center"><?php echo $string2; ?></td>
			    			<td class="text-center"><?php echo strtoupper($string2); ?></td>
			    		</tr>
			    		<tr>
			    			<td class="text-success text-center">ucwords()</td>
			    			<td class="text-center">Primera letra en Mayúscula de c/palabra</td>
			    			<td class="text-center"><?php echo $string2; ?></td>
			    			<td class="text-center"><?php echo ucwords($string2); ?></td>
			    		</tr>
			    		<tr>
			    			<td class="text-success text-center">strrev()</td>
			    			<td class="text-center">Texto al revés</td>
			    			<td class="text-center"><?php echo $string2; ?></td>
			    			<td class="text-center"><?php echo strrev($string2); ?></td>
			    		</tr>
			    		<tr>
			    			<td class="text-success text-center">strreplace()</td>
			    			<td class="text-center">Cambia la cadena de texto</td>
			    			<td class="text-center"><?php echo $string3; ?></td>
			    			<td class="text-center"><?php echo str_replace( "Mundo" ,"Jeremias",$string3); ?></td>
			    			<tr>
			    			<td class="text-success text-center">substr()</td>
			    			<td class="text-center">Substraer Cadena</td>
			    			<td class="text-center"><?php echo $string3; ?></td>
			    			<td class="text-center"><?php echo substr($string3, 5 ,9); ?></td>
			    		</tr>
			    		</tr>
			    	</tbody>
			    </table>
			</div>
		</section>
	</main>
	<script src="js/jquery-3.4.1.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>