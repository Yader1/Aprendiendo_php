<?php 
	class Cabezera{
		//Atributos
		private $titulo;
		private $ubicacion;
		
		function __construct($title, $ubi){
			$this -> titulo = $title;
			$this -> ubicacion = $ubi;
		}

		public function estilo(){
			echo '<div style="font-size:40px; text-align:'.$this->ubicacion. '">';
			echo $this->titulo;
			echo '</div>';
		}
	}

	$cabezera1 = new Cabezera('Bienvenido a mi sitio', 'center');
	$cabezera1 -> estilo();
 ?>