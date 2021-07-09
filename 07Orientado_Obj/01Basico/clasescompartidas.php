<?php 
	class Cabezera{
		private $titulo;

		public function __construct($tit){
			$this-> titulo = $tit;
		}

		public function estilo(){
			echo '<h1 style="text-align:center">'.$this->titulo.'</h1>';
		}
	}

	class Cuerpo{
		private $parrafo = array();

		public function insertarParrafo($lineas){
			$this -> parrafo[] = $lineas;
		}

		public function estilo(){
			for($i = 0; $i < count($this -> parrafo); $i++){
				echo '<p>'.$this -> parrafo[$i].'</p>';
			}
		}
	}

	class Pie{
		private $derecho;

		public function __construct($tit){
			$this-> derecho = $tit;
		}

		public function estilo(){
			echo '<h4 style="text-align:center">'.$this->derecho.'</h4>';
		}
	}

	class Pagina{
		private $cabezera;
		private $cuerpo;
		private $pie;

		public function __construct($texto1, $texto2){
			$this -> cabezera = new Cabezera($texto1);
			$this -> cuerpo = new Cuerpo();
			$this -> pie = new Pie($texto2);
		}

		public function insertarCuerpo($texto){
			$this -> cuerpo -> insertarParrafo($texto);
		}

		public function estilo(){
			$this -> cabezera -> estilo();
			$this -> cuerpo -> estilo();
			$this -> pie -> estilo();
		}
	}


	$pagina1 = new Pagina('Bienvenidos a mi pagina', 'Todos los derechos reservados');
	$pagina1 -> insertarCuerpo('Lorem dis ejdnij  goikkofoif fkdkdd dkdkd djnwij ekjcnjne ejdjsnj enjdjisjfi efnsnicsn dsdnicncins ensinc dniniw');
	$pagina1 -> insertarCuerpo('Lorem dis ejdnij klsksk dklfkd sslfkfd goikkofoif fkdkdd dkdkd djnwij ekjcnjne ejdjsnj enjdjisjfi efnsnicsn dsdnicncins ensinc dniniw');
	$pagina1 -> insertarCuerpo('Lorem dis ejdnij klsksk dklfkd sslfkfd goikkofoif fkdkdd dkdkd djnwij ekjcnjne ejdjsnj enjdjisjfi efnsnicsn dsdnicncins ensinc dniniw');

	$pagina1 -> estilo();
 ?>