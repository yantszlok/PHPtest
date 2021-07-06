<?php

fscanf(STDIN, "%d %d", $a, $b);
 if($a>$b || $a*6<$b && $a*5<$b && $a*4<$b && $a*3<$b && $a*2<$b && $a*1<$b){
  echo "no";
 }else{
  echo "yes";
}

?>
