<?php

fscanf(STDIN, "%d %d %d %d", $A, $B, $C, $D);

$answer = -1;
 
if ($B < $C * $D) {
    $answer = ceil($A / ($C * $D - $B));
}
 
echo $answer;

?>
