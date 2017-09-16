<?php 

	/* 
		faz uma instancia da conexão com PDO passando o nome do banco de dados, nome do host, usuario, senha
	*/

	/*
		a ordem dos parametros na conexão com PDO não importa.
	*/

	$con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	/*
		cria doi parametros para serem recebidos nos campos values. Importante ressaltar que o nome dos parametros é case sensitive	
		COM esse tipo de inserção não precisamos colocar strings dentro de aspas e deixar numeros sem aspas pois o PDO faz isso automaticamente
	*/
	$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");
	$login = "Jose";
	$password = "123456";
	/*
		seta para o objeto stmt o valor da variavel logim para o parametro do values do comando prepare
	*/
	$stmt->bindParam(":LOGIN",$login);
	$stmt->bindParam(":PASSWORD",$password);
	/* 
		executa o SQl do prepare 
	*/
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