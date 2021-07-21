<?php

$S = fgets(STDIN);
$T = fgets(STDIN);

$s = str_split($S);
$t = str_split($T);

$ans = 0;
for($i=0; $i<3; $i++){
if($s[$i] == $t[$i]){
 $anst++;
  }
}
echo $ans;
