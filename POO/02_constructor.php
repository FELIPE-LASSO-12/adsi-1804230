<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>POO CONSTRUCTOR</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			
		
<?php 
	class PlayList {
		//Atributos
		private $name;
		private $name_artist = array();
		private $name_album  = array();
		private $image 		 = array();
		private $year 		 = array();
		private $type 		 = array();

		//Método Constructor 
		public function __construct($nm) {
			$this->name = $nm;
		}

		public function setPlayList($na,$nb,$im,$y,$t) {
			$this->name_artist[] = $na;
			$this->name_album[]  = $nb;
			$this->image[]		 = $im;
			$this->year[] 		 = $y;
			$this->type[] 		 = $t;
			
		   }

					 public function getPlayList() {
					 	for ($i=0; $i < count($this->name_artist); $i++) {
					 	echo "<div class='col-md-4'>";
					 	echo"<div class='card'>";
						echo"<img src='".$this->image[$i]."' class='card-img-top'>";
						echo"<div class='card-body'>";
						echo"<h5 class='card-title'>".$this->name."</h5>";
						echo"</div>";
						  echo"<ul class='list-group list-group-flush'>";
						  echo"<li class='list-group-item'>".$this->name_artist[$i]."</li>";
						  echo"<li class='list-group-item'>".$this->name_album[$i]."</li>";
						  echo"<li class='list-group-item'>".$this->year[$i]."</li>";
						  echo"<li class='list-group-item'>".$this->type[$i]."</li>";
						  echo"</ul>";
						  echo"</div>";
						  echo"</div>";


					 }
		 		}
	
			}
		
	$pl = new PlayList('Variedad 2019');
	$pl->setPlayList('Metallica','Master of Puppets','http://tiny.cc/0pfchz',1998,'Heavy Metal');
	$pl->setPlayList('Scorpions','Acoustica','https://images-na.ssl-images-amazon.com/images/I/81tWU6R0nGL._SL1500_.jpg',2001,'Rock Clásico');
	$pl->setPlayList('Red Hot Chilli Peppers','Californication','http://tiny.cc/4xlhhz',1999,'Alternativo/Independiente');
	
	$pl->getPlayList();

	?>

			</div>
	</div>

	</body>
	</html>	

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
	
