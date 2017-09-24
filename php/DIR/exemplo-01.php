<?php 


	$name = "imagens";
	/* is_dir verifica se há o diretorio com o nome armazenado na variavel */
	if(!is_dir($name)){

		/* cria um diretorio com o nome armazenado na variavel */
		mkdir($name);
		echo "Direotrio criado com sucesso ";

	}else{
		/* remove o diretorio cunjo o nome esta armazenado na variavel $name */
		rmdir($name);
		echo "Este diretorio foi removido ";
	}


	


 ?>