<?php 
	session_start();
	echo 'the value of foo is ' . $_SESSION['foo'];
	$_SESSION['foo'] += 1;
 ?>