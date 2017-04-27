<?php 
	class tabla {
		public $nf;
		public $nc;

		public function __construct($nf, $nc){
			$this->nf = $nf;
			$this->nc = $nc;
		}
		public function drawTable(){
			 echo "<table border='1'>";
			 for ($i=0; $i < $this->nf ; $i++){
				$this->drawRowStart();
				for ($s=0; $s < $this->nc ; $s++) {
					$this->drawCells();
		    	}
		    	$this->drawRowEnd();
			}
			echo "</table>";
		}
		public function drawRowStart(){
			echo "<tr>";
		}
		public function drawCells(){
			echo "<td> tabla</td>";
			}
		public function drawRowEnd(){
			echo "</tr>";
		}
	}

	$tb = new tabla(8,6);
	$tb->drawTable();
	
	