<?php 
	
	$nome = "Hcode <br/>";

	echo $nome . "mais alguma coisa";

	echo "<hr>";
	echo "Operadores <br/>";
	$valor = 0;

	$valor +=100;

	$valor *= .9; // atribui ao valor da variavel 90% do valor dela mesmo

	echo $valor;

	echo "<hr>";

	echo "Operadores aritimeticos";

	$valor1 = 100;
	$valor1 ** $valor1;
	echo "<br/>";
	echo $valor1;

	echo "<hr>";
	$x = null;
	$a = 10;
	$b = 20;
	var_dump($a > $b);
	echo "<hr>";
	var_dump($a <=> $b);/* para comparar se a é maior, iqual ou diferente de b  resultado 1 , 0 , -1 respectivamente */
	echo "<hr>";
	echo $x ?? $a;  //se x for nulo imprima a  


 ?>