<?php
$numbers = [1, 2, 3, 4, 5];
$cities = ['بغداد', 'بصرة', 'كربلاء', 'موصل', 'ديالى'];
$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

echo $numbers[2];

echo '<br>';

echo $cities[0];

echo '<br>';

echo $allowed_ext[3];

echo '<br>';
//----------------------------------------

$students = [
  'name' => 'آدم',
  'email' => 'adam@gmail.com'
];

echo $students['name'];

echo '<br>';


$all_students = [
	[
	  'name' => 'hussien',
	  'email' => 'hussien@gmail.com'
	],
	[
	  'name' => 'noor',
	  'email' => 'noor@gmail.com'
	],
	[
	  'name' => 'adam',
	  'email' => 'adam@gmail.com'
	]
];

echo $all_students[1]['email'];
echo '<br>';

$a = json_encode($all_students);
echo $a;
echo '<br>';

$json_obj = json_decode($a, true);
echo $json_obj[1]['email'];
?>