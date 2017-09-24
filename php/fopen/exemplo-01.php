<?php 
	


	/* fopen nome fo arquivo, modo de edição*/
	$file = fopen("log.txt", "a+");

	/*
		\r para o arquivo começar do inicio da linha, 
		\n para pular linha no arquivo de texto
		fwrite escreve no arquivo especificado no primeiro parameto, no segundo parametro é passado o o valor para ser escrito 	
	*/
	fwrite($file,date("d/m/Y H:i:s"). "\r\n");
	fclose($file);

	


 ?>