<?php 
	class Persona{

		private $nombre;
		private $apellido;

		public function __construct($nom, $ape){
			$this -> nombre = $nom;
			$this -> apellido = $ape;
		}

		public function imprimir(){
			echo $this -> nombre;
			echo " ";
			echo $this -> apellido;
		}
	}

	$persona1 = new Persona('Juan', 'Gonzales');
	$persona1 -> imprimir();
 ?>