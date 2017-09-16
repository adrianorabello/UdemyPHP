<?php 	

	$con = new PDO("mysql:dbname=dbphp7;host=localhost","root","");

	/*
		o comando beginTransaction faz iniciar uma transação e com ele nos podemos controlar as transações realizados no BD. Caso alguma transação não ocoora por algum motivo alheio podemos retornar a situação anterior que o banco estava
	*/
	$con-> beginTransaction();


	/*
		A quantidade de ? significa a quantidade de parametros que iremos receber para executar a query
	*/
	
	$stmt = $con->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

	$id = 9;

	/*
		se eu tivesse mais de um parametro para ser passado para o execute ue colocaria $stmt->execute(array($id, <proximo parametro>)); 
		A quantidade de parametros tem que iqual a quantidade de ? que temos no prepare
	*/
	$stmt->execute(array($id));

	/*
		O comando rollback faz o banco de dados retornar a forma como ele estava antes de executar o comando execute
	*/

	$con->rollback();

	/*
		O comando commit permite que a transação se realzie no BD
	*/

	$con->commit();

	echo "Apagado, porem rollback";
	

	
	


 ?>