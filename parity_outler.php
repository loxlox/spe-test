<?php
$array      = [11, 13, 15, 19, 9, 13, -21];
$oddarray   = [];
$evenarray  = [];
$count      = 1;

foreach ($array as $value) {
  echo "$value,";
}
echo "<br>";
echo "return even: ";

foreach ($array as $print) {
  if ($count % 2 == 1) {
    $evenarray = $print;
    echo "$print,";
  }
  $count++;
}
echo "<br>";
echo "return odd: ";

foreach ($array as $print2) {
  if ($count % 2 != 1) {
    $oddarray[] = $print2;
    echo "$print2,";
  }
  $count++;
}