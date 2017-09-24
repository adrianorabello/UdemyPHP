

<?php 

	require_once("config.php");

	$sql = new Sql();


	/* $result pega os dados vundo do BD */
	$result = $sql->select("select * from tb_usuarios");

	$header = array();

	/* esse foreach pega o valor dos cabeçalhos dos camos de dados e emvia para o array header com a primeira letra maiuscula */
	foreach ($result[0] as $key => $value) {
		array_push($header, ucfirst($key));
	}

	/* abre o arquivo usuario.csv ou cria se não existir */
	$file = fopen("usuario.csv", "w+");

	/* escrve dentro do arquivo contido em $file o valor que esta em $header , concatenando para iniciar do começo da linha e pulando uma linha */
	fwrite($file, implode(" | ", $header) . "\r \n");


	foreach ($result as $row) {
		
		$data = array();

		foreach ($row as $key => $value) {
			array_push($data, $value);

		}// end foreach de coluna 

		fwrite($file,implode(" | ", $data) . "\r \n");

	}// end foreach de linha 



	fclose($file);

	//echo json_encode($header);


 ?>