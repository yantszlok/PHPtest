<?php

$S = fgets(STDIN);

$s = str_split($S);

$e = str_split("CODEFESTIVAL");

$ans = 0;

for($i = 0; $i < 12; $i++){
  if($e[$i] != $s[$i]){
   $ans++;
  } 
}
echo $ans;

?>
