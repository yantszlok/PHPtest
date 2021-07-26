<?php

fscanf(STDIN, "%d %d", $a, $b);
fscanf(STDIN, "%d %d", $c, $d);

$x = max($a,$b);

$y = min($c,$d);

echo $x-$y;

?>
