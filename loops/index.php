<?php

  function addSuffix($words, $suffix) { // adds a suffix to the end of each word in an array
    for($i = 0; $i < count($words); $i++) {
      $words[$i] .= "$suffix\n";
    }
    return $words;
  }

  $sufficatedWords = addSuffix(array("civil", "rational", "abnormal"), 'ity');
  foreach($sufficatedWords as $word) {
    echo "suffixed word: $word";
  }

  function countdown($number) { //returns and array of numbers from $number to 0
    $numbers = array();
    for($j = $number; $j >= 0; $j--) {
      array_push($numbers, $j);
    }
    return $numbers;
  }

  $count = countdown(3);
  foreach($count as $num){
    echo "$num\n";
  }

  function sumAll($numbers) { // returns he sum of all numbers in an array
    $sum = 0;
    foreach($numbers as $number){
      $sum += $number;
    }
    return $sum;
  }

  $sumOneToTen = sumAll(array(1,2,3,4,5,6,7,8,9,10));
  echo "sum of number 1 to 10: $sumOneToTen\n";

?>
