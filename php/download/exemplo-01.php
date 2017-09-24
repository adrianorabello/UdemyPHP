<?php 

	
	$link = "https://www.google.com.br/logos/doodles/2017/spring-equinox-2017-southern-hemisphere-5116905491791872.2-law.gif";

	$content = file_get_contents($link);


	$parse = parse_url($link);

	$baseName = basename($parse['path']);

	$file = fopen($baseName, "w+");

	fwrite($file, $content);

	fclose($file);



 ?>



 <img src="<?=$baseName?>">