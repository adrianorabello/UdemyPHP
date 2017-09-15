<?php 

	/* chama a conexão mysqli e passa como parametro o servidor, usuario, senha, nome do banco */

	$con = new mysqli("localhost","root","","dbphp7");


	if($con->connect_error){ 
		echo "Erro " . $con->connect_error; /* emite o nome do error caso não consiga se conectar */
	}

	
	$result = $con->query("SELECT * FROM tb_usuarios");

	$data = array();

	while($row = $result->fetch_assoc()){

		array_push($data, $row);

		//var_dump($row);
	}


	echo json_encode($data);

	




 ?>