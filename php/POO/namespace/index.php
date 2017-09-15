<?php 
	
	require_once("config.php");
	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Adriano");
	$cad->setEmail("gMail.com");
	$cad->setSenha("123456");

	echo $cad->registrarVenda();


 ?>