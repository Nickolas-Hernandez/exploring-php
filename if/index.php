<?php

  function isUnderFive($number){
    if($number < 5){
      return true;
    }else {
      return false;
    }
  }

  $tenUnderFive = isUnderFive(10);
  echo "10 is less than 5?: " . ($tenUnderFive ? "true\n" : "false\n");

  $threeUnderFive = isUnderFive(3);
  echo "3 is less than 5?: " . ($threeUnderFive ? "true\n" : "false\n");

  function isEven($number) {
    if($number % 2 === 0){
      return true;
    }else {
      return false;
    }
  }

  $twoIsEven = isEven(2);
  echo "2 is even?: " . ($twoIsEven ? "true\n" : "false\n");
  $nineIsEven = isEven(7);
  echo "9 is even?: " . ($nineIsEven ? "true\n" : "false\n");

  function startsWithJ($string) {
    if(strtoupper($string[0]) === 'J'){
      return true;
    }else {
      return false;
    }
  }

  $jackStartsWithJ = startsWithJ('Jack');
  echo "Jack starts with j?: " . ($jackStartsWithJ ? "true\n" : "false\n");
  $fooStartsWithJ = startsWithJ('foo');
  echo "foo starts with j?: " . ($fooStartsWithJ ? "true\n" : "false\n");

  function isOldEnoughToDrink($age){
    if($age >= 21){
      return true;
    }else {
      return false;
    }
  }

  function catagorizeAcidity($pH) {
    if($pH === 7) {
      return "neutral";
    } elseif ($pH > 7 && $pH <= 14){
      return "basic";
    }elseif ($pH < 7 && $pH >= 0){
      return "acidic";
    }else {
      return "Not a valid pH level.";
    }
  }

  echo "pH = 1: " . catagorizeAcidity(1) . "\n";
  echo "pH = 7: " . catagorizeAcidity(7) . "\n";
  echo "pH = 9: " . catagorizeAcidity(9) . "\n";
  echo "pH = 420: " . catagorizeAcidity(420) . "\n";

?>
