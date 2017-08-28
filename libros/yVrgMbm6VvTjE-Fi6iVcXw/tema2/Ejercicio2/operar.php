<?php
	$euros = $_GET['euros'];		
	$pesetas = $_GET['pesetas'];
	if($euros != null && $pesetas != null){
		$eurosPesetas = $euros * 166;
		$pesetasEuros = $pesetas / 166;
	}else if($euros == null && $pesetas != null){
		$pesetasEuros = $pesetas / 166;
		$eurosPesetas = 0;
	}else {
		$eurosPesetas = $euros * 166;
		$pesetasEuros = 0;
	}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 <p>
 	<label><?php echo $euros."€ "; ?></label>
	<input type="number" name="eurosPesetas" value="<?php echo $eurosPesetas; ?>"> pesetas
</p>
<p>	
	<label><?php echo $pesetas."pesetas "; ?></label>
	<input type="number" name="pesetasEuros" value="<?php echo $pesetasEuros; ?>"> euros
</p> 
 </body>
 </html>