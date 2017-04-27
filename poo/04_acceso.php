<?php 
	class persona {
		public $documento;
		private $nombre;
		private $edad;

		public function __construct($doc, $nom, $eda){
			$this->documento = $doc;
			$this->nombre = $nom;
			$this->edad = $eda;
		}

		public function getData(){
			echo "Documento: ".$this->getDocumento()."<br>";
			echo "Nombre: ".$this->getNombre()."<br>";
			echo "Edad: ".$this->getEdad()."<br>";
		}

		private function getDocumento(){
			return $this->documento;
		}	
		private function getNombre(){
			return $this->nombre;
		}	
		private function getEdad(){
			return $this->edad;
		}	
	}

	$per = new persona(75000001, 'Paola Rios', 19);
	$per->getData();
	//echo $per->docuemento; // Correcto porque es publico y puede ser llamado desde afuera
	//echo $per->nombre; // Erros porque es privado y no puede ser llamado desde afuera