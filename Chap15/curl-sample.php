<?php 
    //gets the data from a URL
function get_url($url)
{
    $ch = curl_init();
     
    if($ch === false)
    {
        die('Failed to create curl object');
    }
     
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}
 
echo get_url('http://www.apple.com/');
 ?>