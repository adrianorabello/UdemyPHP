<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- enctype será enviado como formato binario  -->
	<form method="post" enctype="multipart/form-data">
		

		<input type="file" name="fileUpload">
		<br><br>
		<button type="submit">Enviar</button>
	</form>

</body>
</html>


<?php

	/* $_server['request_method'] pega o tipo de metodo que esta enviado a requisição */

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$file = $_FILES["fileUpload"];


		/* verifica se o arquivo possui erro */
		if ($file["error"]) {

			/* exibe o nome do erro caso tenha algum.*/
			throw new Exception("eror ".$file["error"]);		

		}


		/* nome do diretorio que recebera os uploads*/

		$dirUploads = "uploads";

		/* se não existe o diretorio esse if cria usando o mkdir */
		if (!is_dir($dirUploads)) {
			
			mkdir($dirUploads);

		}

		/* move_upload_file recebe dois parametros, onde esta o arquivo temporario e o nome do arquivo */
		if(move_uploaded_file($file["tmp_name"], $dirUploads.DIRECTORY_SEPARATOR.$file["name"])){

			echo "Arquivo salvo com sucesso";

		}else{

			throw new Exception("Não foi possivel realizar o upload ");
			
		}

	}
  ?>