<?php 

	/* não esta funcionado não sei por que */

	header("Content-type: image/jpeg");
	$file = "img".DIRECTORY_SEPARATOR."wallpaper.jpg";

	$newWidth = 256;
	$newHeight = 256;

	/* pega o tamanho da imagem */
	//$data = var_dump(getimagesize($image));

	list($oldWidth, $oldHeight) = getimagesize($file);


	$newImage = imagecreatetruecolor($newWidth, $newHeight);
	$oldImage = imagecreatefromjpeg($file);


	imagecopyresampled($newImage, $oldImage, 0, 0, 0, 0, $newWidth, $newHeight, $oldWidth, $oldHeight);

	imagejpeg($file);

	imagedestroy($oldImage);
	imagedestroy($newImage);


	


 ?>	