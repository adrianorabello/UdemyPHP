<?php 

	function trataNome($nome){

		if (!$nome) {

			/* se a condição do if acontecer o throw gera um exeção */
			throw new Exception("Nome não informado", 1);			
		}

		echo ucfirst($nome)."<br>";
	}


	/* tenta executar todos os comandos dentro do bloco try */
	try {
		
		/* tenta executar a função, caso algo dê errado a propria função chama e exeção  que informa a mensagem de erro contina na exeção */
		trataNome("joão");
		trataNome("");

	/*catch só sera executado acaso ocorra alguma exeção */
	} catch (Exception $e) {
		
		echo $e->getMessage();

	/* finaly sempre será executado */
	}finally{

		echo " Executou o try ";
	}

 ?>