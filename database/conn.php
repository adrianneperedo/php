<?php 
	$db = new mysqli("localhost", "root", "klabklab", "phpDB");
// make sure the above credentials are correct for your environment
	if ($db->connect_error) {
	die("Connect Error ({$db->connect_errno}) {$db->connect_error}");
}
 ?>