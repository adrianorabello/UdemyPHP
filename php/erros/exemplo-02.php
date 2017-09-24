<?php 
	
	/* para não mostrar os notices que são aqueles avisos mostrados na tela por exemplo quando uma váriavel não foi definida */
	error_reporting(E_ALL & ~E_NOTICE);
	$nome = $_GET['nome']; 

	echo $nome;




		

 ?>