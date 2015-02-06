<html>
<body>

<?php
$current_time = date('h:i:s'); 

$time1 = new DateTime($current_time);
$time2 = new DateTime('05:30:00');
$time_left = $time2->diff($time1);
echo $time_left->format('%H:%i:%S') . " time left before weekend! Yay!";
?>

</body>
</html>