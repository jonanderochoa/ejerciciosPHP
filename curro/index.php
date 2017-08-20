<?php 

	$cadena = "[:en]https://play.google.com/store/apps/ EN 2 [:de]https://play.google.com/store/apps/ DE[:eu]https://play.google.com/store/apps/ EU[:]";
	
	
	//Cortamos la cadena para quitar el final
	$cadena = substr($cadena, 0, -3);
	//idiomas
	preg_match_all("/\[:..\]/", $cadena, $idi);
	//textos
	$content = preg_split("/\[:..\]/", $cadena, -1, PREG_SPLIT_NO_EMPTY);
	
	for($i = 0; $i < sizeof($content); $i++){
		$final[$i][0] = $idi[0][$i];
		$final[$i][1] = $content[$i];
		
	}
	var_dump($final);

	#OTRA FORMA
	$claves = preg_split("/\[|\]/", $cadena);
	var_dump($claves);
?>