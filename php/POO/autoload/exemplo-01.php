<?php 
	
	function __autoload($nomeClasse){ /* essa função inclui todos os arquivos que forem necessarios, sem precisar colocarmos em um require ou include que estão no mesmo diretorio.
	*/
		require_once("$nomeClasse.php");
		//var_dump($nomeClasse);
	}

	$carro = new DelRey(); // estou acessando o metodo da classe delrey sem fazer um include pois a função __autoload que a adicionou quando eu estanciei o objeto

	$carro->acelerar(80);

 ?>