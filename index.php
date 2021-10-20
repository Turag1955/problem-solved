<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
  for ($j = 1; $j <= $n; $j++) {
    if($j == $i || $j+$i ==6){
      echo '*';
    }else{
      echo '&nbsp;&nbsp;&nbsp;';
    }
  }
  echo '<br>';

}
  echo "<hr>";
      
?>

<!-- *                                            3 
  ***                                           2
 *****                                          1
*******                                         0 -->