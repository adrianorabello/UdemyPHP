<?php 
	
	class Pessoa{
		public $nome = "Rasmus Lerdorf";
		protected $idade = 48;
		private $senha = "123456";

		public function verDados(){
			echo $this->nome."<br>";
			echo $this->idade."<br>"; 
			echo $this->senha."<br>";
		}


	}

	class Programador extends Pessoa{
		public function verDados(){

			echo get_class($this)."<br>"; // para informar de qual classe esse metodo esta sendo usado 
			echo $this->nome."<br>";
			echo $this->idade."<br>"; 
			echo $this->senha."<br>";
		}
	}

	$pessoa = new Programador;

	echo $pessoa->verDados();// a clase programador consegue acessar os atributos e metodos publicos e protegidos da classe pessoa pois ela herda a esta classe. No entando ela não consegue acessar os metodos privados da classe pessoa.
	echo "<br>";
	

 ?>