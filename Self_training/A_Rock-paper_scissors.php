<?php

fscanf(STDIN, "%d %d", $x, $y);

$ans = 0;

if($x == $y){
 $ans = $x;
 echo $ans;
}else{
 echo 3-$x-$y;
}



?>
