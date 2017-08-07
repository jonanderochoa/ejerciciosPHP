<?php 

	$cadena = "[:en]https://play.google.com/store/apps/ EN 2 [:de]https://play.google.com/store/apps/ DE[:eu]https://play.google.com/store/apps/ EU[:]";
	
	$array = array('[:en]', '[:es]', '[:de]', '[:eu]', '[:fr]', '[:it]');

	$numIdiomas = sizeof($array);
	for($i = 0; $i < $numIdiomas; $i++){
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
		$array = array(explode(' ', $cadena));

		
	}
	var_dump($array);
	
?>