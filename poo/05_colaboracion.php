<?php 
	class evolucionar{
		public function evolucionarPokemon($nom, $evo){
			echo "<li>".$nom." ha evolucionado a un: ".$evo."</li>";
		}
	}
	class pokemon {
		private $nombre;
		private $evolucion;
		private $colaboracion;

		public function __construct($nom, $evo){
			$this->nombre = $nom;
			$this->evolucion =$evo;
			// Colaboracion de Objetos
			$this->colaboracion = new evolucionar();
		}

		public function evoPokemon(){
			$this->colaboracion->evolucionarPokemon($this->nombre, $this->evolucion);
		}
	}
	$pk1 = new pokemon('Pichu', 'Pikachu');
	$pk1->evoPokemon();

	$pk2 = new pokemon('Pikachu', "Raichu");
	$pk2->evoPokemon();