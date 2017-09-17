<?php 

	
	require_once("config.php");
	$sql = new Sql();
	$retorno = $sql->select("select * from tb_usuarios");
	//echo json_encode($retorno);
	$usuario = new Usuario();
	//$usuario->loadByID(1);
	//echo json_encode($usuario,JSON_PRETTY_PRINT);


	

	/* Pelo motivo de o metodo listarUsuario ser estatico eu posso chamar ele sem precisar instanciar um objeto */
	$lista = Usuario::listarUsuarios();

	//echo json_encode($lista,JSON_PRETTY_PRINT);


	/*Chama o metodo pesquisa que é estatico*/
	$retorno = Usuario::pesquisa("u");

	//echo json_encode($retorno);

	echo $usuario->login("Jose","123456");



 ?>