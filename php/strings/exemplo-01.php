<?php 
	
	$nome = "Hcode";
	$nome2 = 'Treinamentos';

	var_dump($nome,$nome2);

	echo "O nome da escola é $nome "; //isso se chama interpolação 

	echo "<hr>";
	$teste = " mais Um Teste";

	echo $teste."<br/>";
	echo strtoupper($teste)."<br/>";
	echo strtolower($teste)."<br/>";
	echo ucfirst($teste)."<br/>";
	echo ucwords($teste)."<br/>";

	echo "<hr>";

	$troca = " trocando com repalce";
	echo $troca."<br/>";
	$troca = str_replace("tro", "TRO", $troca);
	echo $troca."<br/>";

	echo "<hr>";

	$frase = "Testando a pesquisa com funções nativa do php";

	$pesquisa = strpos($frase, "com");// [onde queremos pesuisar, o que queremos pesquisar]

	var_dump($pesquisa);

	echo "<hr>";

	$contar = "quantos caractere tem ?";

	var_dump(strlen($contar));// contar quantos caracteres tem na variavel

	$c = strpos($contar,"tem");// informa qual a posição de inicio da palvra tem na estrig da variavel contar
	echo $c;




	

 ?>