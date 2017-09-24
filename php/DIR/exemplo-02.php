<?php 
	
/* scandir serve para scanear um diretorio e retorna um array contendo as informações sobre os aquivos que estão dentro deste diretorio */
	$imagens = scandir("imagens");

	$data = array();


	foreach ($imagens as $img) {

		/* verfica se existe o valor contido no array dentro de img */	
		if (!in_array($img, array(".",".."))){
			
			$fileName = "imagens".DIRECTORY_SEPARATOR.$img;

			/* Retorna informações sobre um caminho de arquivo */
			$info = pathinfo($fileName);

			/* filesize informa o tamanho do arquivo  */
			$info["tamanho"] = filesize($fileName);
			$info['modificado'] = date("d/m/Y H:i:s", filemtime($fileName));

			array_push($data, $info);
		}

	}


	echo json_encode($data);


	


	


 ?>