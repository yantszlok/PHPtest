<?php

fscanf(STDIN, "%d", $n);

$p = explode(' ',(fgets(STDIN)));

$ans = 0;

for($i = 1; $i < $n-1 ; $i++){

 if($p[$i-1]<$p[$i]&&$p[$i]<$p[$i+1]){
   $ans++;
 }
   if($p[$i-1]>$p[$i]&&$p[$i]>$p[$i+1]){
   $ans++;
 }
 }
var_dump($p[$i-1]);
var_dump($p[$i]);
var_dump($p[$i+1]);

echo "\n";




echo $ans;

?>
