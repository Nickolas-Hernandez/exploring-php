<?php

  $width = 5;
  $height = 10;
  $area = $width * $height;
  echo "Value of area: $area\n";

  $bill = 100;
  $payment = 120;
  $change = $payment - $bill;
  echo "Value of change: $change\n";
  var_dump($change);

  $quizzes = 76;
  $midterm = 99;
  $final = 95;
  $grade = ($quizzes + $midterm + $final) / 3;
  echo "Value of grade: $grade\n";

  $first_name = "Nick";
  $last_name = "Hernandez";
  $full_name = $first_name . " " . $last_name;
  echo "Value of full name: $full_name\n";
  var_dump($full_name);

  $ph = 6.2;
  $is_acidic = $ph < 7;
  var_dump($is_acidic);
  var_dump($ph);

  $num = 10;
  $num_str = "10";
  var_dump($num === $num_str);
  var_dump($num !== $num_str);

  $a = 100;
  $a += 320;
  echo "Value of a: $a\n";

  $motto = $full_name;
  $motto .= " is the GOAT!";
  echo "$motto\n";

?>
