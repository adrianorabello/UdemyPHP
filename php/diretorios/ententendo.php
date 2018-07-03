
	<?php 

	
	
	$baseDir = "diretorios/";

	$abreDir = ($_GET['dir'] != " " ? $_GET['dir']: $baseDir);	
	$openDir = dir($abreDir);
	echo "<table border=1 width=500>";

	while ($arq = $openDir -> read()) {

		

		if ($arq != "." && $arq != ".." && $arq) {
			
			if (is_dir($abreDir.$arq)) {
			
			}else{

				echo "<tr>";
				echo "<td>$arq</td>";
				echo "<td><a href='diretorios.php?dir=$abreDir.$arq'>Abrir</a></td>";
				echo "</tr>";


			}
		}
		
		
	}
	echo "</table>";

	

	$openDir->close();

 ?>

