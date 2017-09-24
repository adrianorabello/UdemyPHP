<?php 

	
	/* armazena o nome do diretorio que queremos criar */
	$dir1 = "folder_01";
	$dir2 = "folder_02";

	/* se nã existir o diretorio com o nome armazenado na varizvel $dir1, crie ess ediretorio. (função mkdir) */
	if (!is_dir($dir1)) mkdir($dir1);
	if (!is_dir($dir2)) mkdir($dir2);


	$fileName = "readme.txt";

	/* verifica se no diretorio $dir1 existe o arquivo $fileName dentro dele. Caso nao exista cria o arquivo em modo de escrita com a data atual */
	if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $fileName)) {
		
		$file = fopen($dir1 . DIRECTORY_SEPARATOR . $fileName , "w+");

		/* escreve dentro do arquivo o ano e a hora que o arquivo voi aberto */
		fwrite($file,date("Y-m-d H:i:s"));
	}




	/*a função rename move um arquivo de um local e envia para o outro rename(<nome onde o arquivo se encontra>,<nome para onde o arquivo vai ser movido>)*/
	rename($dir1 . DIRECTORY_SEPARATOR . $fileName,	$dir2 . DIRECTORY_SEPARATOR . $fileName	);

	
	echo "Arquivo removido com sucesso ! ";
 ?>