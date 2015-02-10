<?php 
	include('conn.php');

	session_start();
	$id = $_SESSION['id'];
	
	$title = $_POST['title'];
	$year_published = $_POST['year_published'];
	$isbn = $_POST['isbn'];

	$sql = "UPDATE books SET title = '$title', year_published = '$year_published', isbn = '$isbn' WHERE id = $id";
	$db->query($sql);

	header('Location: booklist.php');
 ?>