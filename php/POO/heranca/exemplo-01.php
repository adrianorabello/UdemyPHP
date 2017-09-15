<?php 
	
	class Documento{
		 private $numero;

		 public function getNumero(){
		 	return $this->numero;
		 }

		 public function setNumero($numero){
		 	$this->numero = $numero;
		 }
	}


	class CPF extends Documento{
		public function validar():bool{

			$numeroCPF = $this->getNumero();

			if (!empty($numeroCPF)){

				return true;
			}else{
				return false;	
			} 
			
		}
	}


	$doc = new CPF();
	$doc->setNumero(123);
	var_dump($doc->validar());

	
 ?>