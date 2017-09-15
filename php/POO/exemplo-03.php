<?php 

	class Documento{
		
		private $numero;

		public static function validarCPF($cpf):bool{ // ciramos uma funcao estatica que nao precisa de criar uma instacia para invocala, ela retorna um tipo buleano 
			if (empty($cpf)) return false;
			else return true;			
		}

		/* get e set */		
		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$this->numero = $numero;
		}		
	}

	$cpf = new Documento;
	$cpf->setNumero(12345612312);
	var_dump($cpf->getNumero());
	echo "<hr>";
	var_dump(Documento::validarCPF(123));// chamando o metodo estatico. Não precisa estanciar um objeto

?>