<?php 

	/* Plomorfismo */

	abstract class Animal{// abstract não permite instanciar um objeto direto de animal, é necessario criar uma classe para poser instanciar.

		public function falar(){

			return " Som";
		}

		public function mover(){

			return " Anda";
		}
	}

	class Cachorro extends Animal{
		public function falar(){// o metodo falar da classe animal sobre escreve o metodo falar da classe Animal, isso se chama polimorfismo
			return "Late";
		}

	}

	class Passaro extends Animal{
		public function falar(){// o metodo falar da classe animal sobre escrevel o metodo falar da classe Animal, isso se chama polimorfismo
			return "canta";
		}

		public function mover(){
			return " Voa e ". parent::mover(); // acessa o metodo da classe pai de maneira statica.
		}

	}

	$pluto = new Cachorro();

	echo $pluto->falar()."<br>"; // metodo da clase cachorro
	echo $pluto->mover()."<br>"; // metodo da classe Animal, como cachorro extends e acessa esse metodo

	echo "<hr>";

	$passaro = new Passaro();

	echo $passaro->mover();
 ?>