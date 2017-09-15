<?php 
	interface Veiculo{ // a interface serve para definir um tipo de classe que é obrigatoria a implementação dos metos que ela define. Caso a clase que herda a interface não implementar todos os metodos informados, ocorrera um erro. A interface informa as metodos que devem ser implementados e não como eles devem ser implementados.
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

 ?>