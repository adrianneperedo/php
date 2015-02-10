<?php 
	include('conn.php');

	$id = $_GET['id'];

	session_start();
	$_SESSION['id'] = $id;
	
	$sql = "SELECT * FROM books WHERE id =$id";
	$result = $db->query($sql);

	$row = $result->fetch_assoc();

	$title = $row['title'];
	$year_published = $row['year_published'];
	$isbn = $row['isbn'];



 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Edit Books</title>
 </head>
 <body>
 	<form action="update.php" method="post">
 		<h1>Edit Books</h1>
 		
 		<label for="title">Title:</label><br>
		<input type="text" name="title" id="title" value="<?php echo $title ?>"><br>

		<label for="year_published">Year Published:</label><br>
		<input type="text" name="year_published" id="year_published" value="<?php echo $year_published ?>"><br>

		<label for="isbn">ISBN:</label><br>
		<input type="text" name="isbn" id="isbn" value="<?php echo $isbn ?>"><br><br>

		<input type="submit" value="SAVE">
		<input type="button" value="CANCEL" onclick="window.location='booklist.php';return false;">
 	</form>
 </body>
 </html>