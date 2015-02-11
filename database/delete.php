<?php 
	include('conn.php');
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		$sql = "DELETE FROM books WHERE id =$id";
		$db->query($sql);

		header('Location: index.php');
		exit();
	}
	
	
 ?>