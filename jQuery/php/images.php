<?php 
	if ($_POST) {
	 	$img = $_POST['img'];
	 	switch ($img) {
	 		case '1':
	 			echo "imgs/toad.png";
	 			break;
	 		case '2':
	 			echo "imgs/toadsworth.png";
	 			break;
	 		case '3':
	 			echo "imgs/birdo.png";
	 			break;
	 		
	 		default:
	 			echo "imgs/noimg.jpg";
	 			break;
	 	}
	 } ?>