<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Sample</title>
</head>
<body>

	<?php if(!empty($_POST['name'])){
		echo "<h1>Greetings, {$_POST['name']}, and welcome.</h1>";
	}
	?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		Enter your name: <input type="text" name="name"/>
		<input type="submit">
	</form>	
	
</body>
</html>