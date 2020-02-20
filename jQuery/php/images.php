<?php 
	if ($_POST) {
	 	$img = $_POST['img'];
	 	switch ($img) {
	 		case '1':
	 			echo "imgs/Scorpion.png";
	 			break;
	 		case '2':
	 			echo "imgs/mk1.jpg";
	 			break;
	 		case '3':
	 			echo "imgs/nob.jpg";
	 			break;
	 		
	 		default:
	 			echo "imgs/noimg.jpg";
	 			break;
	 	}
	 } ?>