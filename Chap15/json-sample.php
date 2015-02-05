<?php 
	$data = array(1, 2, 3, 'four', 'five', 'six');
	$jsonData = json_encode($data);

	echo "<h1>json_encode</h1>";
	echo $jsonData;
	echo "<br>";

	//Encode to json

	$jsonData = "{
	\"person\":[
				{\"firstName\" : \"Dianne\", \"lastName\" : \"Young\" },
				{\"firstName\" : \"Hazel\", \"lastName\" : \"Eyes\"}
			]
	}";
	$data = json_decode($jsonData);
	
	echo "<h1>json_decode</h1>";
	print_r($data);
 ?>