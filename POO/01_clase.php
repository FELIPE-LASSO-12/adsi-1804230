<?php 
	// Clase
	class VideoGame {
		//Atributos (Caracteristicas propias de ese objeto)
		public $name; // Nombre del Video Juego
		public $platform; //Plataforma
		public $price; //Precio Venta
		public $year; //Año de Lanzamiento


		//Métodos
		public function setAttributes($name,$platform,$price,$year) {
			$this->name 		= $name;
			$this->platform  = $platform;
			$this->price 	= $price;
			$this->year 		= $year;
		}

		public function getAttributes() {
			return $this->name."-".
				   $this->platform."-".
				   $this->price."-".
				   $this->year;
		}

	}

	$vg1 = new VideoGame; //Se crea el objeto
	$vg1->setAttributes('Halo Reach','PC',50,2019);
	echo $vg1->getAttributes();

	echo"<hr>";

	$vg2 = new VideoGame; //Se crea el objeto
	$vg2->setAttributes('Death Strending','XBox',150,2019);
	echo $vg2->name;