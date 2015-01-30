<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Strings</title>
</head>
<body>
	
<?php 
$array =  array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
$html  = '<p>I am a paragraph</p>';
$url = 'http://ianperedo.tk';
$localhost  ='localhost/php/Chap04/strings.php';
$alphabet_soup = 'A, B, C, D';

$with_slash  = <<< EOWITHSLASH
"It's never going to work," she cried,
as she hit the backslash (\) key.
EOWITHSLASH;
$breakfast = <<< EOBREAKFAST
Well, there's egg and bacon; egg sausage and bacon; egg and spam;
egg bacon and spam; egg bacon sausage and spam; spam bacon sausage
and spam; spam egg spam spam bacon and spam; spam sausage spam spam
bacon spam tomato and spam
EOBREAKFAST;

$greeting = 'good morning citizen';
//Do not insert tab or indention in heredoc

//VARIABLE DECLARATIONS
?>

	<h1>PRINTING STRINGS</h1>
	
	<h2>print_r</h2>
	<?php 
		print_r($array);
	 ?>

	<h2>var_dump</h2>
    <?php 
		var_dump($array);
    ?>

	  <h1>FUNCTIONS</h1>

	  <h2>strip_tags()</h2>
	  <?php 
	  	$stripped  = strip_tags($html );
	  	echo $stripped 
	   ?>

	   <h2>get_meta_tags()</h2>
	   <a href="ianperedo.tk">Visit Site</a><br>
	   <?php 
	   	$meta_tag = get_meta_tags($url );
	   	echo "Webpage made by {$meta_tag['author']}"
	    ?>
	    
	    <h2>rawurlencode</h2>
	    <?php 
	    $raw_url = rawurlencode($localhost );
	    echo $raw_url;
	    ?>
		
		<h2>addslashes()</h2>
		<?php 
		$escaped  = addslashes($with_slash);
		echo $escaped ;
		 ?>

		 <h2>strcmp()</h2>
		 <?php 
			echo strcmp('hello', 'hello') . "<br>";
			echo "Strings are equal <br>";

			echo strcmp('Hello', 'hello') . "<br>";
			echo "Strings are not equal <br>";
		  ?>

		  <h2>strcasecmp()</h2>
		 <?php 
			echo strcasecmp('hello', 'HeLlo') . "<br>";
			echo "Strings are equal";
		  ?>

		  <h2>substr_replace()</h2>
		  <?php 
		  	echo substr_replace($greeting, 'bye', 5, 7);
		   ?>

		   <h2>substr_count()</h2>
		   <?php 
		   	echo "There are " . substr_count($breakfast, 'spam') . " spam";
		    ?>

		    <h2>explode()</h2>
		    <?php 
		    print_r(explode(',', $alphabet_soup)) ;
		     ?>

		    <h2>implode()</h2>
		    <?php 
		    echo implode(',', $array);
		     ?>
</body>
</html>