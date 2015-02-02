<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Arrays</title>
</head>
<body>
	<?php 
		$num = range(4, 6);
		$row1 = array(1, 2, 3);
		$row2 = array(4, 5, 6);
		$row3 = array(7, 8, 9);
		$multi =  array($row1, $row2, $row3);
		$person = array('Fred', 33, 'Betty');
		$person2 = array('name' => 'David', 'age' => 25, 'wife' => 'Britney');
		$people = array('Tim', 'Dick', 'Harriet','Brienda', 'Jo');
		$people2 = array('Joanne', 'Vicky');
		$fruits = array('mango' => 'yellow', 'strawberry' => 'red', 'orange' => 'orange');
		$color = 'yellow';
		$flavor = 'mango';
		$size = 'small';
			//Array Declaration
	 ?>

	<h1>Arrays</h1>
	
	<h2>range()</h2>
	<?php 
		print_r($num);	
	 ?>

	<h2>array_pad()</h2>
	<?php 
		print_r(array_pad($num, 4, 7));
	?>

	<h2>multi-dimensional array</h2>
	<?php 
		print_r($multi);
	 ?>

	 <h2>list()</h2>
	 <?php 
	 	list($name, $age, $wife) = $person;
	 	echo "His name is " . $name . ". He is turning " .  $age . " years old this year. His wife " . $wife . "  loves him so much.";
	  ?>

	  <h2>array_slice()</h2>
	 <?php 
	 	print_r(array_slice($people, 2, 2));
	  ?>

	  <h2>array_chunk</h2>
	  <?php 
	  	print_r(array_chunk($num, 2));
	   ?>

	   <h2>array_keys()</h2>
	   <?php 
	   	print_r(array_keys($fruits));
	    ?>

	   <h2>array_values()</h2>
	    <?php 
		 print_r(array_values($fruits));
		 ?>
	
		<h2>array_splice()</h2>
		<?php 
			array_splice($people, 2, 4, $people2);
			print_r($people);
		 ?>
		
		<h2>extract()</h2>
		<?php 
			extract($person2);
			echo 'My name is ' . $name . '. I am ' . $age . ' years old. ' . $wife . ' is my lovely wife.';
		 ?>

		 <h2>compact()</h2>
		<?php 
			$mogumogu = compact('color', 'flavor', 'size');
				//Remember
			print_r($mogumogu);
		 ?>

		 <h2>foreach</h2>
		 <?php 
		 	foreach ($person2 as $key => $value){
		 	 	echo "David's " . $key . " is " . $value . "<br>";
		 	}
		  ?>

		  <h2>array_walk()</h2>
		  <?php 
		  	function displayFruitColor($value, $key){
		  		echo "The color of {$key} is {$value} <br>";
		  	}

		  	array_walk($fruits, displayFruitColor);
		   ?>
</body>
</html>