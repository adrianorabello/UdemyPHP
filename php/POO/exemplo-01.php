<?php 
	
	class Pessoa{

		public $nome;

		public function falar(){
			return"O meu nome é ".$this->nome; // seta para o atributo nome o valor da variavél nome 
		}
	}

	$glaucio = new Pessoa()// não é obrigatorio usar os parenteses pois o mesmo serve apenas para inicar o construtor vazio ;
	$glaucio->nome = " Glaucio Daniel"; // consegue acessar o atributo nome pois o mesmo é publico
	echo $glaucio->falar(); // chama o metodo falar da classe pessoa 

 ?>