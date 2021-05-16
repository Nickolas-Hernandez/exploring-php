<?php

  $add = 10 + 4;
  $subtract = 10-4;
  $multiply = 10 * 4;
  $divide = 10 / 2;
  $mod = 10 % 4;
  $orderOfOp = (5 + 4) * 10;

  echo "add: $add\n";
  echo "subtract: $subtract\n";
  echo "multiply: $multiply\n";
  echo "divide: $divide\n";
  echo "mod: $mod\n";
  echo "orderOfOp: $orderOfOp\n";

  $num = 10;
  $num++;
  echo "$num\n"; //outputs 11
  echo $num++ . "\n"; //incrementation happens after echo. This outputs 11 instead of 12
  $num2 = 5;
  echo --$num2 . "\n";

  $num += 100;
  echo "$num\n";

  $absolute = abs(-100);
  echo "absolute: $absolute\n";

  $round = round(100 / 3);
  echo "round: $round\n";

  $roundUp = ceil(100 / 3);
  echo "roundUp: $roundUp\n";

  $roundDown = floor(100 / 3);
  echo "roundDown: $roundDown\n";

  $max = max(420, 10);
  echo "max: $max\n";

  $min = min(420 , 10);
  echo "min: $min\n";

  $squareRoot = sqrt(100);
  echo "squareRoot: $squareRoot\n";

?>
