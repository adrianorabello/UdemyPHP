<?php 


	$image = imagecreatefromjpeg("img/certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);

	$grey = imagecolorallocate($image, 100, 100, 100);

	imagestring($image, 5, 450, 150, "cerificado", $titleColor);
	imagestring($image, 5, 440, 350, "Divanei aparecido", $titleColor);
	imagestring($image, 3, 440, 370, "Concluido em ". date("d/m/Y"), $titleColor);

	header("Content-type: image/jpeg");

	/* para poder baixar o arquivo em algum diretorio */
	imagejpeg($image,"certificado".date("d-m-Y").".jpg",100);

	imagedestroy($image);


 ?>	