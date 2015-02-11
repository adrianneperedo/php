<?php 
	include('conn.php');

	if(isset($_GET['id'])){
		$id = $_GET['id'];
	
		$sql = "SELECT * FROM books WHERE id =$id";
		$result = $db->query($sql);

		$row = $result->fetch_assoc();

		$title = $row['title'];
		$year_published = $row['year_published'];
		$isbn = $row['isbn'];
	}

	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$year_published = $_POST['year_published'];
		$isbn = $_POST['isbn'];

		$sql = "UPDATE books SET title = '$title', year_published = '$year_published', isbn = '$isbn' WHERE id = $id";
		$db->query($sql);

		header('Location: index.php');
		exit();
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Edit Books</title>
 </head>
 <body>
 	<form action="" method="post">
 		<h1>Edit Books</h1>
 		
 		<label for="title">Title:</label><br>
		<input type="text" name="title" id="title" value="<?php echo $title ?>"><br>

		<label for="year_published">Year Published:</label><br>
		<input type="text" name="year_published" id="year_published" value="<?php echo $year_published ?>"><br>

		<label for="isbn">ISBN:</label><br>
		<input type="text" name="isbn" id="isbn" value="<?php echo $isbn ?>"><br><br>

		<input type="submit" value="SAVE" name="submit">
		<input type="button" value="CANCEL" onclick="window.location='index.php';return false;">
 	</form>
 </body>
 </html>