<html>
<body>

<?php

header("refresh: 1");

$current_time = date('h:i:s'); 

$time1 = new DateTime($current_time);
$time2 = new DateTime('05:30:00');
$time_left = $time2->diff($time1);
echo $time_left->format('%H:%I:%S') . " time left before weekend! Yay!";
?>

</body>
</html>