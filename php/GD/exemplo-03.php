<?php 


	$image = imagecreatefromjpeg("img/certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);

	$grey = imagecolorallocate($image, 100, 100, 100);


	/*imagettftext(endereço da igamem, posicionamento do titulo )*/
	imagettftext($image, 32, 0, 320, 200, $titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
	imagettftext($image, 15, 0, 500, 300, $titleColor,"fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "Picatofly");
	/*imagettftext(endereço da igamem, posicionamento do do nome )*/
	imagettftext($image, 32, 0, 320, 350, $titleColor,"fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Adriano Rodrigues Rabello");
	imagestring($image, 3, 440, 370, "Concluido em ". date("d/m/Y"), $titleColor);

	header("Content-type: image/jpeg");

	/* para poder baixar o arquivo em algum diretorio */
	imagejpeg($image);

	imagedestroy($image);


 ?>	