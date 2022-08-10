<?php
echo date('Y');
echo '<br>';

date_default_timezone_set("Asia/Baghdad");
$current_time = date('Y/m/d&h:i:s_A');
echo $current_time;
echo '<br>';

$a = explode("&", $current_time);
echo $a[0];
?>