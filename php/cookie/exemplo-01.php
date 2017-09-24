<?php 
	
	

	$data = array(

		"empresa"=>"Wcode treinamentos"
	);

	/* nome do  cookie, valor , tempo que o cookie  */
	setcookie("nome",json_encode($data),time()+3600);

	echo "ok";


	


 ?>