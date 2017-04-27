<?php 
	class operacion{
			protected $num1;
			protected $num2;
			protected $res;
public function __construct($n1,$n2){
					$this->num1=$n1;
					$this->num2=$n2;
			}
public function getOperacion(){
					return $this-> res;
			}
		}
		class suma extends operacion{
			public function calcular(){
				$this->res=$this->num1+$this->num2;				
			}
		}
		class resta extends operacion{
			public function calcular(){
				$this->res=$this->num1-$this->num2;				
			}
		}
		class multiplicacion extends operacion{
			public function calcular(){
				$this->res=$this->num1*$this->num2;				
			}
		}
		class division extends operacion{
			public function calcular(){
				$this->res=$this->num1/$this->num2;				
			}
		}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operaciones (Herencia)</title>
</head>
<body>
	<form action="" method="post">
		<select name="op">
			<option value="">Operacion...</option>
			<option value="1">Suma</option>
			<option value="2">Resta</option>
			<option value="3">Multiplicacion</option>
			<option value="4">Division</option>
		</select>
		<input type="number" name="n1" placeholder="Numero 1">
		<input type="number" name="n2" placeholder="Numero 2">
		<input type="submit"  value="calcular">
	</form>
	<?php 	
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$op = $_POST['op'];
			$n1 = $_POST['n1'];
			$n2 = $_POST['n2'];

			if ($op == '1') {
				$op = new Suma($n1, $n2);
				$op->calcular();
				echo "La Suma es igual a ".$op->getOperacion();
			}
			if ($op == '2') {
				$op = new Resta($n1, $n2);
				$op->calcular();
				echo "La Resta es igual a ".$op->getOperacion();
			}
			if ($op == '3') {
				$op = new Multiplicacion($n1, $n2);
				$op->calcular();
				echo "La Multiplicacion es igual a ".$op->getOperacion();
			}
			if ($op == '4') {
				$op = new Division($n1, $n2);
				$op->calcular();
				echo "La Division es igual a ".$op->getOperacion();
			}
		}
	?>
</body>
</html>
