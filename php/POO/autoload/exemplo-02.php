<?php 
/*
	essas funções erve para incluir arquivos que estejam em outras pastas
*/

	function incluirClasses($nomeClasse){

		if (file_exists($nomeClasse.".php") === true) {
			require_once($nomeClasse.".php");
		}
	}

	spl_autoload_register("incluirClasses");
	spl_autoload_register(function($nomeClasse){

		if (file_exists("Abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){ // seleciona os arquivos dentro da pasta Abstratas que possui a extensão .php e inclui ele nesta pagina
			require_once($nomeClasse.".php");
		}
	});

	$carro = new DelRey();
	$carro->acelerar(80);
 ?>