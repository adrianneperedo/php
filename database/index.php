<?php
include('conn.php');
$sql = "SELECT * FROM books ORDER BY title";
$result = $db->query($sql);
?>

<html>
<body>
	<table cellSpacing="2" cellPadding="6" align="center" border="1">
		<tr>
			<td colspan="4">
				<h3 align="center">Books available</h3>
			</td>
		</tr>
		<tr>
			<td align="center">Title</td>
			<td align="center">Year Published</td>
			<td align="center">ISBN</td>
			<td align="center">Action</td>
		</tr>
		<?php while ($row = $result->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $row['title']; ?></td>
			<td align="center"><?php echo $row['year_published']; ?></td>
			<td><?php echo $row['isbn']; ?></td>
			<td> 
				<a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a> |
				<a href="delete.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure you want to delete this book?');">Delete</a>
		</tr>
		<?php } ?>
	</table>
	<a href="add.php" style="text-align:center;"><h2>Add Books</h2></a>
</body>
</html>
