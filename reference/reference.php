<?php 
	function add(&$var){ 
			$var++;
	}

	$a = 1;
	$b = 2;
	add($a);	// $a is equal to $var
	echo "a is $a <br>";
	add($b);	// $b is equal to $var
	echo "b is $b"; 
 ?>