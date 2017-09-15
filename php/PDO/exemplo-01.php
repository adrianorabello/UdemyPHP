<?php 

	/* 
		faz uma instancia da conexão com PDO passando o nome do banco de dados, nome do host, usuario, senha
	*/

	$con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
	$stmt = $con->prepare("SELECT * FROM tb_usuarios order by deslogin");

	/* executa o SQl do prepare */
	$stmt->execute();

	/* 
	armazena na variavel result o função fetchAll com o parametro fetch assoc que faz uma associação do nome do campo do BD com o valor que ele possui
	
	*/
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);//

	/*
		percorre todo o result pegando o nome do campo e o seu valor. Precisa de 2 foreach para poder imprimir com o ocmando echo pu usar o json para pegar os dados de maneira mais simplificada
	*/

	foreach ($result as $row) {
		foreach ($row as $key => $value) {
			echo "<strong>".$key."</strong> - " . $value."<br/>";
		}
	}


	/*
		imprimir em formato json 
	*/

	//echo json_encode($result,JSON_PRETTY_PRINT);


 ?>