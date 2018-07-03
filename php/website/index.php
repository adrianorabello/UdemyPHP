<?php 
	
	require "vendor/autoload.php";

	/*use \Psr\Http\Message\ServerRequestInterface as Request;
	use \Psr\Http\Message\ResponseInterface as Response;*/
    
    $app = new \Slim\Slim();

    $app->get('/', function () {
	    
	    echo json_encode(array(
	     "hora"=>date("d-m-Y")
	    ));
	});


	$app->get('/hello/:name', function ($name) {
	    
	    echo $name;
	});

	$app->run();


 ?>