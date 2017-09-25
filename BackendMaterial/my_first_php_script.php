<?php

echo nl2br("Welcome\n This is my PHP script\n", false);

$txt = "Ganesh Jayaraman";


$array = explode(" ",$txt);

var_dump(sizeof($array));

$arr = array(1,2,3,4,5); // or $arr = array(); $arr[0] = 1;$arr[1] = 2; 

foreach ($arr as  $value) {
	echo $value."<br>";
}

$ass_arr = array(

	'id' => 1,
	'name' => 'Ganesh',
	'email' => 'ganeshjayaram97@gmail.com'

	);


$multi_ass_arr = array(
	array(
	'id' => 1,
	'name' => 'Ganesh',
	'email' => 'ganeshjayaram97@gmail.com'
	),

	array(
	'id' => 2,
	'name' => 'Dinesh',
	'email' => 'dineshjayaram97@gmail.com'
	)

	);


foreach ($ass_arr as  $value) {
	echo $value."<br>";
}



foreach ($multi_ass_arr as  $value) {
	foreach ($value as $key => $val) {
		echo $key." => ".$val."<br>";
	}
	echo "<br>";
}




//echo phpinfo();

?>