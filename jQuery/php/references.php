<?php 
	if ($_GET) {
		$brn = $_GET['brn'];
		switch ($brn) {
			case '1':
				echo "<option>V10</option>";
				echo "<option>MegaTower</option>";
				echo "<option>HighTower</option>";
				echo "<option>Nomad</option>";
				echo "<option>Bronson</option>";
				break;
			case '2':
				echo "<option>Tracer</option>";
				echo "<option>Recluse</option>";
				echo "<option>Carbine</option>";
				echo "<option>Spider</option>";
				break;
			case '3':
				echo "<option>SB6</option>";
				echo "<option>SB6</option>";
				echo "<option>SB4.5</option>";
				echo "<option>Betti</option>";
				break;
			
			default:
				echo "<option>Marca no encontrada...</option>";
				break;
		}
	}
 ?>