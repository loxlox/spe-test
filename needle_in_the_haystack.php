<?php

function find_needle($array, $find) {
  echo "<pre>";
  print_r($array);
  echo "</pre>";
  echo '<br>' . 'find variable was <strong>' . $find . '</strong><br><br>';
  for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] === $find) {
      echo 'index of the needle is ' .$i;
      return false;
    }
  }
}

find_needle(["red", "blue", "yellow", "black", "grey"], "blue");