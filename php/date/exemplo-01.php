<?php 
	date_default_timezone_set('America/Sao_Paulo'); // define o local da hora
	$dt = new DateTime(); // isntacia da classe DateTime	
	echo $dt->format('d/m/Y H:i:s'); // infroma para o objeto $dt o modelo de data 

	echo "<hr>";

	$periodo = new DateInterval("P15D"); // adiciona 15 dias na data que quisermos 
	$dt->add($periodo); // adiciona ao objeto $dt o periodo contido na varivel $periodo

	echo $dt->format('d/m/Y H:i:s'); // format um tipo de função da classe DateTime()

	echo "<hr>";
	var_dump($dt);

 ?>