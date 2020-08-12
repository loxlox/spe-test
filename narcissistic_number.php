<?php
function narcissistic_number($number) {
	$sum = 0;
	$x = $number;
	while($x !== 0) {
		$rem = $x % 10;
		$sum = $sum + $rem*$rem*$rem;
		$x = $x / 10;
	}

	if ($number === $sum) {
		return 1;
  }
	return 0;
}

$number = 153;
$flag   = narcissistic_number($number);
if ($flag == 1) {
	echo 'true';
} else {
  echo 'false';
}