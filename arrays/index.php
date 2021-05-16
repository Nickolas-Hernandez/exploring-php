<?php

  $colors = array('red', 'white', 'blue');
  echo "America is " . $colors[0] . ", " . $colors[1] . ", and " . $colors[2] . ".\n";

  $jedi = array('Anakin', 'Obi-Wan', "Mace Windu", "Quigong Jin");
  $length = count($jedi);
  echo "length: $length\n";
  $lastIndex = $length - 1;
  echo "last jedi: " . $jedi[$lastIndex] . "\n";

  $chakraTypes = array("Naruto"=>"wind", "Sasuke"=>"fire", "Hashirama"=>"wood");
  echo "Naruto: " . $chakraTypes["Naruto"];

?>
