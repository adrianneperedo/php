<?php 

/*
***********
MYSQLI
***********
*/

$host = "localhost";
$username = "username";
$password = "password";
$database = "database";

$db = new mysqli($host, $username, $password, $database)

$sql = "SELECT * FROM records";
$result = $db->query($sql);

while($row = $result->fetch_assoc(()){
	
}

/*
*******************************
PDO using prepare statements
*******************************
*/

$db_conn = new PDO('mysql:host=localhost;dbname=db','username', 'password');

 $sql = "SELECT * FROM records where id = :id";

 $stmt = $db_conn->prepare($sql);
 $stmt->execute(array('id'=>1));

 $result = $stmt->fecth_assoc();

?>






