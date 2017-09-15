<?php 

	include "exemplo-01.php"; // tenta funcionar mesmo que o arquivo estja com erro
	require "rexemplo-01.php"// a diferença para o include é que este requer que o arquivo exista e esteja fucionando corretamente

	require_once = "exemplo-01.php"; // chama o arquivi apenas uma vez, ignorando a segunda chamada caso exista

	$resultado = somar(3,2); // cahama a função que esta no arquivos citado no include
	echo $resultado;

 ?>