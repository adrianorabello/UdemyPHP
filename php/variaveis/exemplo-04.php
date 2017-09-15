<?php 
	
	$nome = (int)$_GET["a"];// serve para informar que o dado deve ser do tipo int
	/* para passar o valor da variavél para url usa-se ?<nome da variavel> = <valor da variavel> 
		exemplo: http://localhost/git/UdemyPHP/php/variaveis/exemplo-04.php?a=123	*/	
	var_dump($nome);

	$ip = $_SERVER['REMOTE_ADDR'];/*para pegar o ip de quem esta acessado o site */

	echo $ip;



 ?>