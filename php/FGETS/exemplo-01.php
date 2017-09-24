<?php 

	
	$fileName = "usuario.csv";

	if (file_exists($fileName)){
		
		$file = fopen($fileName, "r");

		$data = array();
		
		$headers = explode("|",fgets($file));

		while ($row = fgets($file)) {

			$rowData = explode("|", $row);
			$linha = array();
			

			for ($i = 0; $i < count($headers) ; $i++) { 

				$linha[$headers[$i]] = $rowData[$i];
				
			}

			array_push($data, $linha);
		}

		fclose($file);
		echo "<pre>";
		echo json_encode($data,JSON_PRETTY_PRINT);
		
	}


 ?>