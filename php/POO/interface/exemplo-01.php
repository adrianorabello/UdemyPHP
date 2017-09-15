<?php 

	interface Veiculo{ // a interface serve para definir um tipo de classe que é obrigatoria a implementação dos metos que ela define. Caso a clase que herda a interface não implementar todos os metodos informados, ocorrera um erro. A interface informa as metodos que devem ser implementados e não como eles devem ser implementados.
		public function acelerar($velocidade);
		public function freiar($velocidade);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo{ // caso seja necessario implementar varias interfaces é spo colocar , <nome da outra interface>

		public function acelerar($velocidade){ // o nome do paremetro não precisa ser o mesmo da interface

		}

		public function freiar($velocidade){

		}

		public function trocarMarcha($marcha){

		}
	}


	$carro = new Civic();


 ?>