<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>__construct</h1>
<?php
	class Cube{

		public $length;
		public $depth;
		public $height;

		public function __construct($l = 10, $d = 10, $h = 10){
			$this->length = $l;
			$this->depth = $d;
			$this->height = $h;
			}

		public function getVolume(){
			return $this->length * $this->depth * $this->height;
			}
	}

	$cube1 = new Cube();	
	echo "Cube1 volume is: " . $cube1->getVolume() . "<br>";

	$cube2 = new Cube(5, 6);
	echo "Cube2 volume is: " . $cube2->getVolume(); "<br>";
?>
</body>
</html>

