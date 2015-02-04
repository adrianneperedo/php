<?php 
	header('Content-Type: text/xml');

	echo "<?xml version=\"1.0\"?>";
	echo "<rss version=\"0.91\">";
	echo "<channel>";

	$items = array(
				array(
				'title' => "Man Bites Dog",
				'link' => "http://www.example.com/dog.php",
				'desc' => "Ironic turnaround!"
				),
				array(
				'title' => "Medical Breakthrough!",
				'link' => "http://www.example.com/doc.php",
				'desc' => "Doctors announced a cure for me."
				)
			);
	foreach($items as $item) {
	echo "<item>\n";
	echo " <title>{$item['title']}</title>\n";
	echo " <link>{$item['link']}</link>\n";
	echo " <description>{$item['desc']}</description>\n";
	echo " <language>en-us</language>\n";
	echo "</item>\n\n";
	} 
	
	echo "</channel>";	
	echo "</rss>";
?>