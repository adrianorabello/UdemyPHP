<?php 	
	
	class Carro{
		
		private $modelo;
		private $motor;
		private $ano;

		public function exibir(){

			return array(
					"modelo"=> $this->getModelo(),
					"motor"=> $this->getMotor(),
					"ano"=> $this->getAno()
				);
		}




		/* getters e setters*/

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($modelo){
			$this->modelo = $modelo;
		}

		public function getMotor():float{// :float informa que o metodo ira retornar um float
			return $this->motor;
		}

		public function setMotor($motor){
			$this->motor = $motor;
		}

		public function getAno():int{ // :int informa que o retorno do metodo vai ser um int 
			return $this->ano;
		}

		public function setAno($ano){
			$this->ano = $ano;
		}
		
	}

	$carro1  = new Carro(); // faz a instacia da classe carro 
	$carro1->setModelo("Fiat stillo"); // envia para modelo o valor stillo
	$carro1->setAno("2017"); // envia para ano o valor de 
	$carro1->setMotor("1.8");

	var_dump($carro1->exibir()); // chama o metodo exibir da classe Carro pelo objeto $carro1
	
 ?>