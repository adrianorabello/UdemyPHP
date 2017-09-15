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

	$pessoa = new Pessoa;

	echo $pessoa->nome;
	echo "<br>";
	//echo $pessoa->idade; // não pode acessar essa propriedade pois o objeto é protegido

	

	//$pessoa->verDados();

	/* 
		As classes que herdam uma classe conseguem mudar os atributos e metodos protegidos, mas não conseguem mudar os atributos ou metodos privados
	*/ 

 ?>