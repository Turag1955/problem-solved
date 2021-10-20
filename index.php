<?php

/**Problem 2 */

$n = 5;
for ($i = 1; $i <= $n; $i++) {
  for ($j = 1; $j <= $n; $j++) {
    if ($j == $i || $j + $i == 6) {
      echo '*';
    } else {
      echo '&nbsp;&nbsp;&nbsp;';
    }
  }
  echo '<br>';
}
echo "<hr>";
/*******************************
            Problem 2 
 *******************************   
   Input- aAcDgbE
   Output- AaCdGBe
          Capital to small : 3
          Small to capital : 4 
      
 *******************************/
$input = ['a', 'A', 'c', 'D', 'g', 'b', 'E'];
for ($i = 0; $i < count($input); $i++) {
  if (ctype_upper($input[$i])) {
    $input[$i] = strtolower($input[$i]);
    $captal_to_small[] = $input[$i];
  } else {
    $input[$i] = strtoupper($input[$i]);
    $small_to_capital[] = $input[$i];
  }
}
$implode = implode('', $input);
echo 'Output = '.$implode.'<br> <br>';
echo "Capital To Small = ".count($captal_to_small).'<br> <br>';
echo "Small To Capital = ".count($small_to_capital).'<br> <br>';