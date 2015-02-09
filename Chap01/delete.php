<?php 
	include('conn.php');
		$id = $_GET['id'];
		
		$sql = "DELETE FROM books WHERE id =$id";
		$db->query($sql);

		header('Location: booklist.php');
	
 ?>