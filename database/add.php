<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Books</title>
</head>
<body>
	<form action="" method="post">
 		<h1>Add Books</h1>
 		
 		<label for="title">Title:</label><br>
		<input type="text" name="title" id="title"><br>

		<label for="year_published">Year Published:</label><br>
		<input type="text" name="year_published" id="year_published"><br>

		<label for="isbn">ISBN:</label><br>
		<input type="text" name="isbn" id="isbn"><br><br>

		<input type="submit" value="SAVE" name="submit">
		<input type="button" value="CANCEL" onclick="window.location='index.php';return false;">
 	</form>		

 	<?php 
 		include('conn.php');

 		if (isset($_POST['submit'])){

 			$title = $_POST['title'];
 			$year_published = $_POST['year_published'];
 			$isbn = $_POST['isbn'];

 			$sql = "INSERT INTO books VALUES('$title', '$year_published', '$isbn','')";
 			$db->query($sql);

 			header('Location: index.php');
 			exit();
 		}
 		
 	 ?>
</body>
</html>