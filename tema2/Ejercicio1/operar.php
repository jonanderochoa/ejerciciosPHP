<?php 
	$first = $_GET['first'];
	$second = $_GET['second'];
	
	$total = $first * $second;
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
 	<label>Total: </label>
 	<input type="text" name="total" value="<?php echo $total; ?>">
 </body>
 </html>