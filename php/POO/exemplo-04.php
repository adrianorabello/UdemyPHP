<?php 
	
	class Endereco{

		private $logradouro;
		private $numero;
		private $cidade;


		public function __construct($a, $b, $c){
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		public function __destruct(){ // serve para destuir um uma instacia
			var_dump("destuir"); 
		}

		public function __toString(){
			return $this->logradouro. " , ".$this->numero." , ".$this->cidade;
		}
	}



	$endereco1 = new Endereco("Endereço da minha rua ",13,"Serra");

	var_dump($endereco1);
	echo "<hr>";
	//unset($endereco1); // unset() destroi o objeto criado
	//echo "<hr>";
	echo $endereco1; // automaticamente chama o metodo toString(), pois o metodo tString() converte o metodo para string 

 ?>