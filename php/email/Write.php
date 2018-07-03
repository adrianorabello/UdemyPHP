<?php 	

	/**
	 * 	
	 */
	class Write{
		
		function __construct(){
			# code...
		}


		public function write($dados){

			$file = "contents.html";

			$html = " ";
			$html .= "<html> ";
			$html .= "<head> ";
			$html .= "<meta charset='UTF-8'>";			
			$html .= "</head>";
			$html .= "<h4>Inscrição realizada com suecesso para ".$dados["curso"]." </h4> <br><br>";

			$html .= "<p> Sr(a) ".$dados["nome"]." favor comparecer ao local informado no edital para realizar a etapa selecionada. </p>";


			$html .= "<h6>Corpo de Bombeiros Militar do Espírito Santo <h6>";

			$html .= "<p><small>DAL GTI <small></p>";
			$html .= "</html> ";

			$fp = fopen("contents.html","w");
			fwrite($fp, $html);


		}
	}

 ?>