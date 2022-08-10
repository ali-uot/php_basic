<?php
for ($i = 0; $i <= 10; $i++) {
  echo "i= $i <br>";
}

echo '<br>';
//---------------------------------
$x = 1;
while ($x <= 5){
  echo "x= $x <br>";
  $x++;
}
echo '<br>';
//---------------------------------

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

$num = count($all_students);
for($i=0;$i<$num;$i++){
	echo $all_students[$i]['name'].'<br>';
}
echo '<br>';
?>