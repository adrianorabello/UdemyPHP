<?php 
	
	require_once "vendor/autoload.php";
	require "Email.php";
	require "Sql.php";
	require "Write.php";


	$sql = new Sql();

	$results = $sql->select("select g.nome,g.email,t.descricao as curso from guarda_vida g join inscricao_cursos_gv i on g.cpf = i.cpfGuardaVida join tipo_inscricao t on i.idTipoInscricao = t.idTipoInscricao");

	echo "<pre>";
	print_r($results);

	$email = new Email();
	$w = new Write();

	for ($i=0; $i < 2; $i++) { 



		$w->write($results[$i]);

		$email->setEmail($results[$i],"teste Email");
	}


 ?>