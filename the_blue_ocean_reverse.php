<?php

function blue_ocean($array, $find) {
  $newArray = [];
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] !== $find[0]) {
      $newArray[] = $array[$i];
    }
  }
  echo "<pre>";
  print_r($newArray);
  echo "</pre>";
}

blue_ocean([1,2,3,4,6,10], [1]);
blue_ocean([1,5,5,5,5,3], [5]);