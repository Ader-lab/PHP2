<?php
$bloodType[] = 'A';

var_dump($bloodType);

$bloodType[] = 'B';
$bloodType[] = 'AB';
$bloodType[] = 'O';

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}
?>