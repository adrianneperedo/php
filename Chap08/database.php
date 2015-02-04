<?php 
	$db = new mysqli("localhost", "root", "klabklab", "testDB");

	$sql = 'SELECT * FROM student';

	$result = $db->query($sql);

	while($row = $result->fetch_assoc()){
		echo "{$row['NAME']} ID is: {$row['ID']} <br>";

	}
	$result->close();
	$db->close();
 ?>

