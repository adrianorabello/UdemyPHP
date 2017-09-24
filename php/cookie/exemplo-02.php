<?php 
	

	 /* verifica se o cookie como o nome de 'nome' existe */
	if (isset($_COOKIE['nome'])) {
		

		/*tranforma o json em array pois infroma o true */
		$array = json_decode($_COOKIE['nome'],true);

		var_dump($array);

		echo "<hr>";

		$obj = json_decode($_COOKIE['nome']);

		/* acessa a chave empresa dentro do objeto */
		echo $obj->empresa;
	}



 ?>