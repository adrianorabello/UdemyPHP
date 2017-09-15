<?php 

	/* chama a conexão mysqli e passa como parametro o servidor, usuario, senha, nome do banco */

	$con = new mysqli("localhost","root","","dbphp7");


	if($con->connect_error){ 
		echo "Erro " . $con->connect_error; /* emite o nome do error caso não consiga se conectar */
	}

	/* essa função prepara a inserção para ser enviada para o banco de dados e armazena na variavel stmt*/

	$stmt = $con->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");

	/* 
	esse metodo passa os tipos de dados das interrogações. para string colocar s para string,colocar i para int. Cada letra é um parametro não pode colocar o valor dentro do metodo bind_param, tem que colocar variavel 

	*/

	$stmt->bind_param("ss",$login,$pass);

	$login = "user";
	$pass = "123456";

	/* 
		executa o prepare (comando) armazenado na varivel $stmt 
		para fazer o insert no baco é so trocar o valor da variavel login e pass e chamar a função para executar o SQL que já esta no prepare

	*/
	$stmt->execute();


 ?>