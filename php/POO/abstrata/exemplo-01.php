<?php 
	

	interface Veiculo{
		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);
	}

	abstract class Automovel implements Veiculo{ // uma classe abstrata não pode ser instanciada obrigando assim a criar outra classe para poder acessar os metos que esta possui. Uma classe pode imprementar paenas uma classe abstrada, mas pode implementar variar interfaces.

		public function acelerar($velocidade){

			echo " Acelerando ate " . $velocidade;

		}

		public function freiar($velocidade){

		}

		public function trocarMarcha($marcha){

		}
	}

	class DelRey extends Automovel{

		public function empurrar(){

		}
	}

	$carro = new DelRey();

	$carro->acelerar(200);
 ?>