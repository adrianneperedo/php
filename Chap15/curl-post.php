<?php 
	
$url = 'http://localhost/php/Chap15/curl-submit.php';
 
$ch = curl_init();
     
if($ch === false)
{
    die('Failed to create curl object');
}
 
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_POST, true);
 
// The submitted form data, encoded as query-string-style name-value pairs
$post_data = 'name=Harry&age=25';
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($ch);
curl_close ($ch);
 
echo $output;
 ?>
