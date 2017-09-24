<?php 
	
	/* no cep não precisa informar o - */
	$cep = "29163566";
	/* serviço disponibilizado para buscar o cep via api do correio
		link para api do correios para buscar cep: https://viacep.com.br/ */
	$link = "viacep.com.br/ws/".$cep."/json/";

	/* inicia a comunicação pelo link */
	$ch = curl_init($link);

	/*curl_setopt(nome da variavel que iniciou a comunicação, para transferir o requerimento para o serviço informado , quer ou não uma resposta de volta)*/
	curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);

	/* curl_setopt(variavel que iniciou a comunicação, informar se é necessario verificar verificar se quem esta solicitando o serviço precisa ter um sertificado seguro, precisa ser seguro, sim ou não )*/
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);

	/* execução da solicitação do serviço */
	$response = curl_exec($ch);

	/* fechar a conexão com o serviço */
	curl_close($ch);

		
	/* tranforma o objeto em array */
	$data = json_decode($response,true);


	/*podemos pegar o dado que quisermos pela chave do array */
	print_r($data);





 ?>