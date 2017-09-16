<?php 

	
	require_once("config.php");
	$sql = new Sql();
	$retorno = $sql->select("select * from tb_usuarios");
	echo json_encode($retorno);


 ?>