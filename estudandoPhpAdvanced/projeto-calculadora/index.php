<?php 

	class Calculadora{
		private $n;

		public function __construct ($n1){
			$this->n = $n1;
		
		}
		public function somar($n1) {
			$this->n += $n1;
			return $this;
		}
		public function subtrair($n1) {
			$this->n -= $n1;
			return $this;	
		}
		public function multiplicar($n1) {
			$this->n *= $n1;
			return $this;
		}
		public function dividir($n1) {
			$this->n /= $n1;
			return $this;
		}
		public function resultado() {
			return $this->n;
		}
	}

	echo "-------Calculadora-------<br/>";

	$calc = new Calculadora(10);
	$calc->somar(2)->subtrair(3)->multiplicar(5)->dividir(2);
	echo $calc->resultado();


?>