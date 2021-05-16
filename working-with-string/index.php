<?php

  $phrase = "Grumpy wizards drink toxic brew";

  $splitPhrase = str_split($phrase, $length = 5);
  echo "\n$splitPhrase[0]";

  if(strpos($phrase, 'wizard')) {
    echo "\nThe String 'wizard' was found in the phrase!";
  }else {
    echo "\nThe string 'wizard' was not found in the phrase.";
  }

  $uppercased = strtoupper($phrase);
  echo "\n$uppercased";

  $lowercased = strtolower($uppercased);
  echo "\n$lowercased";

  $stringLength = strlen($phrase);
  echo "\n$stringLength";

  $reversedString = strrev($phrase);
  echo "\n$reversedString";

  $replaceI = str_replace('i', 'u', $phrase);
  echo "\n$replaceI";

?>
