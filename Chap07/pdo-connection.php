<?php 

	try {
		$db = new PDO("mysql:host=localhost;dbname=testDB", "root", "klabklab");
		echo "PDO connection successful!";
		// connection successful
	}
	catch (Exception $error) {
		die("Connection failed: " . $error->getMessage());
	}

 ?>