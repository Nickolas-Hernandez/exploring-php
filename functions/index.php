<?php

  function convertMintoSec($minutes){
    return $minutes * 60;
  }

echo "Convert 5 minutes to seconds: " . convertMintoSec(5) . "\n";
echo "Convert 10 minutes to seconds: " . convertMintoSec(10) . "\n";
echo "Convert 2 minutes to seconds: " . convertMintoSec(2) . "\n";

function greet($name) {
  echo "Hello, $name!\n";
}

greet('Nick');
greet('Margot');

function getArea($width, $height){
  return $width * $height;
}

echo "getArea(5, 5): " . getArea(5, 5) . "\n";
echo "getArea(16, 16): " . getArea(16, 16) . "\n";

function getLastElement($array){
  $lastIndex = count($array) - 1;
  return $array[$lastIndex];
}

$jedi = array("Anakin", "Obi-Wan", "Yoda", "Mace Windu");
$lastJedi = getLastElement($jedi);
echo "Last jedi: $lastJedi\n";

?>
