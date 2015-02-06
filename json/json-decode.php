<?php 
	$jsondata = file_get_contents("colors.json");
	$json = json_decode($jsondata, true)
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Colors</title>
 </head>
 <body>
 	<h1>Colors</h1>

 		<?php 
 			foreach($json['colors'] as $key => $value){
 				echo "<h2 style=\"color:{$value['hexValue']}\">" . $value['colorName'] . "</h2>";
 				echo "<h4>" . $value['hexValue'] . "</h4>";
 			}
 		 ?>

 </body>
 </html>