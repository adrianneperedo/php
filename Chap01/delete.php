<?php 
	include('conn.php');
	if (!empty($_GET)) {
		$id = $_GET['id'];
		
		$sql = "DELETE FROM books WHERE id =$id";
		$db->query($sql);

		header('Location: booklist.php');
	}
 ?>