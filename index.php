<?php 

	$cadena = "[:en]https://play.google.com/store/apps/ EN 2 [:de]https://play.google.com/store/apps/ DE[:eu]https://play.google.com/store/apps/ EU[:]";
	
	#Cortamos las frases entre :
	#
	$array = array('[:en]', '[:es]', '[:de]', '[:eu]', '[:fr]', '[:it]');

	$numIdiomas = sizeof($array);
	for($i = 0; $i < $numIdiomas; $i++){
		preg_split("/\[:..\]/", $cadena);
		#$array = array(explode('/\[:\]/', $cadena));
		switch ($i) {
			case '[:es]':
				# code...
				break;
			case '[:de]':
				# code...
				break;
			case '[:eu]':
				# code...
				break;
			case '[:fr]':
				# code...
				break;	
			case '[:it]':
				# code...
				break;
			default:
				# code...
				break;
		}
		

		
	}
	var_dump($array);
	
?>