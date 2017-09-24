<?php 

	$fileName = "Koala.jpg";

	$base64 = base64_encode(file_get_contents($fileName));

	$fileInfo = new finfo(FILEINFO_MIME_TYPE);	

	$mimeType = $fileInfo->file($fileName);

	$base64Encode = "data:".$mimeType.";base64,". $base64;

 ?>

 <a href="<?=$base64Encode?>" target = "_blank"> Link </a>