<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Personality</title>
</head>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "GET">
		<select name="attributes[]" multiple>
			<option value="perky">Perky</option>
			<option value="monrose">Monrose</option>
			<option value="thinking">Thinking</option>
		</select>
		<input type="submit" value="Record my Personality" name='s'>
	</form>

	<?php 
		if(array_key_exists('s', $_GET)){
			$description = join(' ', $_GET['attributes']);
		echo "You have a {$description} personality.";			
		}
	 ?>
</body>
</html>